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
 * ### Readable storage driver
 *
 * Defines the reading capabilities of a storage driver, including direct content retrieval and stream-based access.
 * @since 1.0.0
 */
interface Readable extends Driver {

    /**
     * ### Gets the contents of a stored object
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return string Complete contents of the stored object.
     */
    public function get (Path $path):string;

    /**
     * ### Opens a readable stream for a stored object
     *
     * The caller is responsible for closing the returned stream.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return \FireHub\Core\Boundary\IO\Stream\Readable Readable stream positioned at the beginning of the object.
     */
    public function readStream (Path $path):ReadableStream;

}