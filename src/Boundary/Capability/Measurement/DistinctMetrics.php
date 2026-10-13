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
 * ### Defines distinct-value measurement
 *
 * Distinct metrics extends general measurement with the ability to determine the number of logically distinct
 * values represented by an object.
 *
 * The distinct size represents the number of unique values according to the equality semantics defined by the
 * implementation and is independent of the total number of value occurrences.
 * @since 1.0.0
 */
interface DistinctMetrics extends Metrics {

    /**
     * ### Gets the number of distinct values
     * @since 1.0.0
     *
     * @return non-negative-int The number of logically distinct values.
     */
    public function distinctSize ():int;

}