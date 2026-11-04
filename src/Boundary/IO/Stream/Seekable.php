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
use FireHub\Core\Type\IO\SeekOrigin;

/**
 * ### Seekable Stream Contract
 *
 * Defines operations for inspecting and modifying the current position within a seekable stream.
 * @since 1.0.0
 */
interface Seekable extends Stream {

    /**
     * ### Determines whether the stream supports seeking
     * @since 1.0.0
     *
     * @return bool True if the stream supports seeking.
     */
    public function isSeekable ():bool;

    /**
     * ### Moves the current stream position
     *
     * Moves the stream position relative to the specified origin.
     * @since 1.0.0
     *
     * @param int $offset <p>
     * Position offset in bytes.
     * </p>
     * @param \FireHub\Core\Type\IO\SeekOrigin $origin [optional] <p>
     * Reference position used to calculate the new position.
     * </p>
     *
     * @return void
     */
    public function seek (int $offset, SeekOrigin $origin = SeekOrigin::START):void;

    /**
     * ### Rewinds the stream
     *
     * Moves the current stream position to the beginning.
     * @since 1.0.0
     *
     * @return void
     */
    public function rewind ():void;

}