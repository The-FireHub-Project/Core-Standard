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

/**
 * ### Writable Stream Contract
 *
 * Defines operations for writing sequential data to a stream.
 *
 * Writing may modify the stream contents and advance its current position.
 * @since 1.0.0
 */
interface Writable {

    /**
     * ### Writes data to the stream
     *
     * Writes the supplied data and returns the number of bytes written.
     *
     * Implementations may write fewer bytes than requested.
     * @since 1.0.0
     *
     * @param string $data <p>
     * Data to write to the stream.
     * </p>
     *
     * @return non-negative-int Number of bytes written.
     */
    public function write (string $data):int;

}