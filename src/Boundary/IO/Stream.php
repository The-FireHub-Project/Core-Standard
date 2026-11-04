<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core
 */

namespace FireHub\Core\Boundary\IO;

/**
 * ### Input and Output Stream Contract
 *
 * Defines a common interface for reading, writing, seeking, and managing input and output streams.
 *
 * Stream implementations may represent files, memory buffers, network connections, pipes, or other sequential data
 * sources.
 *
 * Stream operations may modify the current position and internal state.
 * @since 1.0.0
 */
interface Stream {

    /**
     * ### Determines whether the stream is closed
     * @since 1.0.0
     *
     * @return bool True if the stream is closed.
     */
    public function isClosed ():bool;

    /**
     * ### Determines whether the stream has reached its end
     * @since 1.0.0
     *
     * @return bool True if the end of the stream has been reached.
     */
    public function eof ():bool;

    /**
     * ### Gets the stream size
     *
     * Returns null when the stream size cannot be determined.
     * @since 1.0.0
     *
     * @return null|non-negative-int Stream size in bytes, or null if unknown.
     */
    public function size ():?int;

    /**
     * ### Closes the stream
     *
     * Releases the stream's resources according to its ownership policy. Calling this method multiple times must be
     * safe.
     * @since 1.0.0
     *
     * @return void
     */
    public function close ():void;

}