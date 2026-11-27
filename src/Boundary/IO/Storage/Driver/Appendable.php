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

use FireHub\Core\Boundary\IO\Storage\Path;
use FireHub\Core\Boundary\IO\Stream\Readable as ReadableStream;

/**
 * ### Appendable storage driver
 *
 * Defines storage driver capabilities for extending the contents of stored objects without discarding their existing
 * contents.
 *
 * Missing objects are created automatically.
 * @since 1.0.0
 */
interface Appendable extends Writable {

    /**
     * ### Appends contents to a stored object
     *
     * Adds the supplied contents to the end of an existing stored object.
     *
     * If the object does not exist, it is created. No separator is automatically inserted between the contents.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param string $contents <p>
     * Contents to append.
     * </p>
     *
     * @return void
     */
    public function append (Path $path, string $contents):void;

    /**
     * ### Prepends contents to a stored object
     *
     * Adds the supplied contents to the beginning of an existing stored object.
     *
     * If the object does not exist, it is created. No separator is automatically inserted between the contents.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param string $contents <p>
     * Contents to prepend.
     * </p>
     *
     * @throws \FireHub\Core\Exception\FireHubException
     * If the contents cannot be prepended.
     *
     * @return void
     */
    public function prepend (Path $path, string $contents):void;

    /**
     * ### Appends stream contents to a stored object
     *
     * Reads the supplied stream from its current position until the end of the stream and appends its contents to
     * the stored object.
     *
     * If the object does not exist, it is created.
     *
     * The supplied stream remains owned by the caller and must not be closed by the storage driver.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     * @param \FireHub\Core\Boundary\IO\Stream\Readable $stream <p>
     * Source stream containing the contents to append.
     * </p>
     *
     * @return void
     */
    public function appendStream (Path $path, ReadableStream $stream):void;

}