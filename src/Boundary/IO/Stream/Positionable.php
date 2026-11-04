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
 * ### Positionable Stream Contract
 *
 * Defines a contract for streams that support retrieving their current position without requiring random-access
 * capabilities.
 *
 * A positionable stream does not necessarily support seeking or rewinding.
 * @since 1.0.0
 */
interface Positionable extends Stream {

    /**
     * ### Gets the current stream position
     *
     * Returns the current position within the stream, expressed as a zero-based byte offset.
     *
     * This operation does not modify the stream position.
     * @since 1.0.0
     *
     * @return non-negative-int Current stream position in bytes.
     */
    public function tell ():int;

}