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

namespace FireHub\Core\Boundary\IO\Stream;

use FireHub\Core\Boundary\IO\Stream;

/**
 * ### Readable Stream Contract
 *
 * Defines operations for reading sequential data from a stream.
 *
 * Reading may advance the current stream position and consume data that cannot be read again.
 * @since 1.0.0
 */
interface Readable extends Stream {

    /**
     * ### Reads data from the stream
     *
     * Reads up to the specified number of bytes.
     *
     * Implementations may return fewer bytes than requested.
     * @since 1.0.0
     *
     * @param non-negative-int $length <p>
     * Maximum number of bytes to read.
     * </p>
     *
     * @return string Data read from the stream.
     */
    public function read (int $length):string;

    /**
     * ### Reads the remaining stream contents
     *
     * Reads from the current position until the end of the stream.
     *
     * This operation may consume the remaining data.
     * @since 1.0.0
     *
     * @return string Remaining stream contents.
     */
    public function contents ():string;

}