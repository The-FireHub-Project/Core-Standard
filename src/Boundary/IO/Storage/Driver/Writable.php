<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary\IO\Storage\Driver;

use FireHub\Core\Boundary\IO\Storage\ {
    Driver, Path
};
use FireHub\Core\Boundary\IO\Stream\Readable as ReadableStream;

/**
 * ### Writable storage driver
 *
 * Defines the writing capabilities of a storage driver, including direct content storage, stream-based storage,
 * and object deletion.
 * @since 1.0.0
 */
interface Writable extends Driver {

    /**
     * ### Stores the contents of an object
     *
     * Creates a new stored object or replaces the contents of an existing one.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param string $contents <p>
     * Contents to store.
     * </p>
     *
     * @return void
     */
    public function put (Path $path, string $contents):void;

    /**
     * ### Stores the contents of a readable stream
     *
     * Reads from the current stream position until the end of the stream.
     *
     * The source stream remains owned by the caller and must not be closed by the storage driver.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param \FireHub\Core\Boundary\IO\Stream\Readable $stream <p>
     * Source stream containing the contents to store.
     * </p>
     *
     * @return void
     */
    public function writeStream (Path $path, ReadableStream $stream):void;

    /**
     * ### Deletes a stored object
     *
     * This operation has no effect if the stored object does not exist.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return void
     */
    public function delete (Path $path):void;

}