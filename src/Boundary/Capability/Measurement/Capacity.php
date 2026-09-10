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
 * ### Defines bounded capacity awareness
 *
 * Capacity awareness provides information about the maximum number of values that can be contained and the
 * remaining space available for additional values.
 *
 * The capability defines the fundamental operations for observing capacity constraints without prescribing how
 * capacity is managed, enforced, or represented internally.
 * @since 1.0.0
 */
interface Capacity {

    /**
     * ### Determines whether the capacity is full
     *
     * Determines whether the maximum capacity has been reached.
     * @since 1.0.0
     *
     * @return bool True if the maximum capacity has been reached, false otherwise.
     */
    public function isFull ():bool;

    /**
     * ### Returns the maximum capacity
     *
     * Returns the maximum number of values that can be contained.
     * @since 1.0.0
     *
     * @return non-negative-int The maximum number of values that can be contained.
     */
    public function capacity ():int;

    /**
     * ### Returns the remaining capacity
     *
     * Returns the number of additional values that can be contained before the maximum capacity is reached.
     * @since 1.0.0
     *
     * @return non-negative-int The number of additional values that can be contained.
     */
    public function remainingCapacity ():int;

}