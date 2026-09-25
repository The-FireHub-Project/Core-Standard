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
 * ### Sorting algorithm
 *
 * Defines a strategy for ordering elements within an indexed range.
 *
 * Elements are addressed internally by sequential positions, independently of the keys or indexes used by their
 * underlying representation. This allows the algorithm to operate on sequential values, key-value entries, and other
 * ordered representations without depending on their storage semantics.
 *
 * Sorting is performed in place through the supplied access and swap operations.
 * @since 1.0.0
 *
 * @template TElement
 */
interface SortAlgorithm {

    /**
     * ### Sorts elements
     *
     * Rearranges the specified number of elements according to the supplied comparison callback.
     *
     * The callback must return a value less than zero when the first element should precede the second, zero when both
     * elements compare equally, or a value greater than zero when the first element should follow the second.
     * @since 1.0.0
     *
     * @param non-negative-int $size <p>
     * Number of elements to sort.
     * </p>
     * @param callable(non-negative-int):TElement $element <p>
     * Callback used to retrieve an element by its internal position.
     * </p>
     * @param callable(non-negative-int, non-negative-int):void $swap <p>
     * Callback used to exchange two elements by their internal positions.
     * </p>
     * @param callable(TElement, TElement):int $comparator <p>
     * Callback used to compare two elements.
     * </p>
     *
     * @return void
     */
    public function sort (int $size, callable $element, callable $swap, callable $comparator):void;

}