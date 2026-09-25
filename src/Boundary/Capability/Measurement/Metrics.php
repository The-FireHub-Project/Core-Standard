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

namespace FireHub\Core\Boundary\Capability\Measurement;

/**
 * ### Defines measurable size information
 *
 * Metrics provide information about the current number of values without prescribing how those values are stored,
 * organized, accessed, or represented internally.
 *
 * The capability defines the fundamental operations for determining whether values are present and observing their
 * current number.
 * @since 1.0.0
 */
interface Metrics {

    /**
     * ### Determines whether there are no values
     *
     * Determines whether the current number of values is zero.
     * @since 1.0.0
     *
     * @return bool True if there are no values, false otherwise.
     */
    public function isEmpty ():bool;

    /**
     * ### Returns the number of values
     *
     * Returns the number of values currently contained.
     * @since 1.0.0
     *
     * @return non-negative-int The number of values currently contained.
     */
    public function size ():int;

}