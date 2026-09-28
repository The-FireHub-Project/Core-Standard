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

namespace FireHub\Core\Boundary\Algorithm\Sorting;

/**
 * ### Defines a distribution sorting algorithm
 *
 * Defines the contract for non-comparison sorting algorithms that distribute elements according to integer keys
 * extracted from their values.
 *
 * Unlike comparison-based sorting algorithms, distribution sorting algorithms do not determine ordering by repeatedly
 * comparing pairs of elements. Instead, they use the structure of the extracted integer keys to distribute elements
 * into their resulting order.
 *
 * Implementations may impose additional requirements on the extracted keys, such as restrictions on the supported
 * key range, representation, or distribution.
 * @since 1.0.0
 *
 * @template TElement
 */
interface DistributionSortAlgorithm {

    /**
     * ### Sorts elements
     *
     * Sorts elements addressed by sequential positions according to integer keys extracted from their values.
     * @since 1.0.0
     *
     * @param non-negative-int $size <p>
     * Number of elements to sort.
     * </p>
     * @param callable(non-negative-int):TElement $element <p>
     * Callback used to retrieve an element by its sequential position.
     * </p>
     * @param callable(non-negative-int, TElement):void $set <p>
     * Callback used to replace an element at its sequential position.
     * </p>
     * @param callable(TElement):int $key <p>
     * Callback used to extract the integer distribution key from an element.
     * </p>
     *
     * @return void
     */
    public function sort (int $size, callable $element, callable $set, callable $key):void;

}