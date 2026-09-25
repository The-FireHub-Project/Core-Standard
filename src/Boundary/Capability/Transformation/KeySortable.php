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

/**
 * ### Key sortable capability
 *
 * Defines a capability for producing an ordered representation of a data structure according to its keys.
 *
 * Implementations may provide specialized sorting strategies appropriate to their underlying representation,
 * including optimized paths for natural ascending and descending key ordering.
 *
 * Sorting does not mutate the source instance. Instead, a new instance of the same concrete type is returned.
 * @since 1.0.0
 *
 * @template TKey
 */
interface KeySortable {

    /**
     * ### Sorts keys using a comparator
     *
     * Produces a new instance whose entries are arranged according to the supplied key comparison callback.
     *
     * The callback must return a value less than zero when the first key should precede the second, zero when both
     * keys compare equally, or a value greater than zero when the first key should follow the second.
     * @since 1.0.0
     *
     * @param callable(TKey, TKey):int<-1, 1> $comparator <p>
     * Callback used to compare two keys.
     * </p>
     *
     * @return static The key-sorted instance.
     */
    public function sortKeysWith (callable $comparator):static;

}