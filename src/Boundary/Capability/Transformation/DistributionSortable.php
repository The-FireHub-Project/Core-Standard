<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Transformation;

use FireHub\Core\Boundary\Algorithm\Sorting\DistributionSortAlgorithm;

/**
 * ### Defines distribution sorting capability
 *
 * Defines the capability for producing a representation whose values are ordered using a distribution sorting
 * algorithm.
 *
 * Unlike comparison-based sorting, distribution sorting derives ordering from integer keys extracted from individual
 * values rather than by comparing pairs of values.
 *
 * Implementations determine how values are accessed, reordered, and stored while the supplied algorithm determines
 * the distribution strategy used to establish their resulting order.
 * @since 1.0.0
 *
 * @template TValue
 */
interface DistributionSortable {

    /**
     * ### Sorts values using a distribution sorting algorithm
     *
     * Produces a representation whose values are ordered according to integer keys extracted from each value by the
     * supplied key extractor.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\Algorithm\Sorting\DistributionSortAlgorithm<TValue> $algorithm <p>
     * Distribution sorting algorithm used to order the values.
     * </p>
     * @param callable(TValue):int $key <p>
     * Callback used to extract the integer distribution key from each value.
     * </p>
     *
     * @return static Sorted representation.
     */
    public function distributionSort (DistributionSortAlgorithm $algorithm, callable $key):static;

}