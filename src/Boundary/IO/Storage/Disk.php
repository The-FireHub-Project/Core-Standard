<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\IO\Storage;

use FireHub\Core\Boundary\IO\Stream\Readable;

/**
 * ### Storage disk
 *
 * Represents a configured storage resource that provides a unified interface for accessing and managing stored
 * objects, independently of the underlying storage technology.
 *
 * Available operations depend on the capabilities of the underlying storage driver.
 * @since 1.0.0
 */
interface Disk {

    /**
     * ### Determines whether the disk supports reading
     * @since 1.0.0
     *
     * @return bool True if reading is supported, false otherwise.
     */
    public function isReadable ():bool;

    /**
     * ### Determines whether the disk supports writing
     * @since 1.0.0
     *
     * @return bool True if writing is supported, false otherwise.
     */
    public function isWritable ():bool;

    /**
     * ### Determines whether the disk supports physical path resolution
     * @since 1.0.0
     *
     * @return bool True if physical path resolution is supported, false otherwise.
     */
    public function isLocatable ():bool;

    /**
     * ### Determines whether a stored object exists
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return bool True if the stored object exists, false otherwise.
     */
    public function exists (string|Path $path):bool;

    /**
     * ### Determines whether a stored object is missing
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return bool True if the stored object does not exist, false otherwise.
     */
    public function missing (string|Path $path):bool;

    /**
     * ### Gets the contents of a stored object
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return string Complete contents of the stored object.
     */
    public function get (string|Path $path):string;

    /**
     * ### Stores the contents of an object
     *
     * Creates a new stored object or replaces the contents of an existing one.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param string $contents <p>
     * Contents to store.
     * </p>
     *
     * @return void
     */
    public function put (string|Path $path, string $contents):void;

    /**
     * ### Deletes a stored object
     *
     * This operation has no effect if the stored object does not exist.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return void
     */
    public function delete (string|Path $path):void;

    /**
     * ### Opens a readable stream for a stored object
     *
     * The caller is responsible for closing the returned stream.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return \FireHub\Core\Boundary\IO\Stream\Readable Readable stream positioned at the beginning of the stored
     * object.
     */
    public function readStream (string|Path $path):Readable;

    /**
     * ### Stores the contents of a readable stream
     *
     * Reads from the current stream position until the end of the stream. The source stream remains owned by the
     * caller.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param \FireHub\Core\Boundary\IO\Stream\Readable $stream <p>
     * Source stream containing the contents to store.
     * </p>
     *
     * @return void
     */
    public function writeStream (string|Path $path, Readable $stream):void;

    /**
     * ### Resolves the physical path of a stored object
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return non-empty-string Canonical absolute filesystem path.
     */
    public function locate (string|Path $path):string;

    /**
     * ### Appends contents to a stored object
     *
     * Creates the object if it does not exist.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param string $contents <p>
     * Contents to append.
     * </p>
     *
     * @return void
     */
    public function append (string|Path $path, string $contents):void;

    /**
     * ### Prepends contents to a stored object
     *
     * Creates the object if it does not exist.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param string $contents <p>
     * Contents to prepend.
     * </p>
     *
     * @return void
     */
    public function prepend (string|Path $path, string $contents):void;

    /**
     * ### Appends stream contents to a stored object
     *
     * Creates the object if it does not exist.
     *
     * The supplied stream remains owned by the caller.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param \FireHub\Core\Boundary\IO\Stream\Readable $stream <p>
     * Source stream.
     * </p>
     *
     * @return void
     */
    public function appendStream (string|Path $path, Readable $stream):void;

    /**
     * ### Determines whether the disk supports extending stored contents
     *
     * Indicates driver capability rather than filesystem access permissions.
     * @since 1.0.0
     *
     * @return bool True if the disk supports append and prepend operations.
     */
    public function isAppendable ():bool;

    /**
     * ### Copies a stored object
     *
     * Copies the contents of an existing stored object to another logical path within the same storage disk.
     *
     * If the destination object already exists, it is replaced.
     *
     * Copying an existing object to itself has no effect.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $source <p>
     * Logical path of the source object.
     * </p>
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $destination <p>
     * Logical path of the destination object.
     * </p>
     *
     * @return void
     */
    public function copy (string|Path $source, string|Path $destination):void;

    /**
     * ### Moves a stored object
     *
     * Moves an existing stored object to another logical path within the same storage disk.
     *
     * If the destination object already exists, it is replaced.
     *
     * Moving an existing object to itself has no effect.
     * @since 1.0.0
     *
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $source <p>
     * Logical path of the source object.
     * </p>
     * @param non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $destination <p>
     * Logical path of the destination object.
     * </p>
     *
     * @return void
     */
    public function move (string|Path $source, string|Path $destination):void;

    /**
     * ### Determines whether the disk supports copying stored objects
     *
     * Indicates whether copying is supported directly by the storage driver or through an alternative storage
     * implementation.
     *
     * Does not guarantee that a particular object can be copied.
     * @since 1.0.0
     *
     * @return bool True if copying stored objects is supported.
     */
    public function isCopyable ():bool;

    /**
     * ### Determines whether the disk supports moving stored objects
     *
     * Indicates whether moving is supported directly by the storage driver or through an alternative storage
     * implementation.
     *
     * Does not guarantee that a particular object can be moved.
     * @since 1.0.0
     *
     * @return bool True if moving stored objects is supported.
     */
    public function isMovable ():bool;

    /**
     * ### Lists stored objects within a directory
     *
     * Lists only objects directly contained within the specified directory.
     * @since 1.0.0
     *
     * @param null|non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to list from the storage root.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\IO\Storage\Path> Logical paths of stored objects relative to the
     * storage root.
     */
    public function files (null|string|Path $directory = null):iterable;

    /**
     * ### Recursively lists stored objects within a directory
     *
     * Includes objects directly contained within the specified directory and objects within all descendant directories.
     * @since 1.0.0
     *
     * @param null|non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to list from the storage root.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\IO\Storage\Path> Logical paths of stored objects relative to the
     * storage root.
     */
    public function allFiles (null|string|Path $directory = null):iterable;

    /**
     * ### Lists storage directories
     *
     * Lists only directories directly contained within the specified directory.
     * @since 1.0.0
     *
     * @param null|non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to list from the storage root.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\IO\Storage\Path> Logical paths of storage directories relative to
     * the storage root.
     */
    public function directories (null|string|Path $directory = null):iterable;

    /**
     * ### Recursively lists storage directories
     *
     * Includes all descendant directories of the specified directory. The specified directory itself is not included.
     * @since 1.0.0
     *
     * @param null|non-empty-string|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to list from the storage root.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\IO\Storage\Path> Logical paths of storage directories relative to
     * the storage root.
     */
    public function allDirectories (null|string|Path $directory = null):iterable;

    /**
     * ### Determines whether the disk supports listing stored objects and directories
     *
     * Indicates storage driver capability rather than actual access permissions.
     * @since 1.0.0
     *
     * @return bool True if listing stored objects and directories is supported.
     */
    public function isListable ():bool;

}