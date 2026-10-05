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

namespace FireHub\Core\Boundary\Capability;

/**
 * ### Defines descendant iteration
 *
 * Provides iteration over the descendants of an element within a hierarchical structure.
 *
 * The element itself is not included in the iteration. The capability does not prescribe the traversal strategy used
 * to visit descendants.
 * @since 1.0.0
 *
 * @template TValue
 */
interface DescendantIteration {

    /**
     * ### Iterates over descendants
     *
     * Iterates over all descendants of the specified element.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue> $node <p>
     * Element whose descendants to iterate over.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue>> Descendant nodes in pre-order
     * depth-first traversal order.
     */
    public function descendants (mixed $node):iterable;

}