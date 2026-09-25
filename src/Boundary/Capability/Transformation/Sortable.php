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

use FireHub\Core\Meta\Enum\Order;

/**
 * ### Sortable capability
 *
 * Defines a capability for producing an ordered representation of an instance according to its values.
 *
 * Implementations may provide specialized sorting strategies appropriate to their underlying representation while
 * preserving the semantics of the requested comparison mode or comparison callback.
 *
 * Sorting does not mutate the source instance. Instead, a new instance of the same concrete type is returned.
 * @since 1.0.0
 *
 * @template TValue
 */
interface Sortable {

    /**
     * ### Sorts values
     *
     * Produces a new instance whose values are arranged according to the specified ordering mode.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Meta\Enum\Order $order [optional] <p>
     * Direction in which the values are ordered.
     * </p>
     *
     * @return static The sorted instance.
     */
    public function sort (Order $order = Order::ASC):static;

    /**
     * ### Sorts values using a comparator
     *
     * Produces a new instance whose values are arranged according to the supplied comparison callback.
     *
     * The callback must return a value less than zero when the first value should precede the second, zero when both
     * values compare equally, or a value greater than zero when the first value should follow the second.
     * @since 1.0.0
     *
     * @param callable(TValue, TValue):int<-1, 1> $comparator <p>
     * Callback used to compare two values.
     * </p>
     *
     * @return static The sorted instance.
     */
    public function sortWith (callable $comparator):static;

}