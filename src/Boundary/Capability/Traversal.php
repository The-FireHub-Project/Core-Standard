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

namespace FireHub\Core\Boundary\Capability;

/**
 * ### Defines traversal of a sequence of values
 *
 * Traversal provides access to values through an iterable sequence without prescribing how the values are stored
 * or represented. Implementations define the order and semantics in which values are traversed.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface Traversal {

    /**
     * ### Traverses the values
     *
     * Returns iterable that yields values according to the traversal order defined by the implementation.
     * Traversal may be limited to a maximum number of elements.
     * @since 1.0.0
     *
     * @param null|int $limit <p>
     * Maximum number of elements to yield. If null, traversal continues until the traversal naturally terminates.
     * </p>
     *
     * @return iterable<TKey, TValue> The traversed values.
     */
    public function traverse (?int $limit = null):iterable;

}