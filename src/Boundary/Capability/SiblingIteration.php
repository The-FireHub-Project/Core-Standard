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

use FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node;

/**
 * ### Defines sibling iteration
 *
 * Provides iteration over the siblings of a node within a hierarchical structure.
 *
 * The specified node itself is not included in the iteration.
 * @since 1.0.0
 *
 * @template TValue
 */
interface SiblingIteration {

    /**
     * ### Iterates over siblings
     *
     * Iterates over all nodes that share the same parent as the specified node while preserving their structural
     * order.
     *
     * The specified node itself is excluded from the iteration. A root node has no siblings.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue> $node <p>
     * Node whose siblings to iterate over.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue>> Sibling nodes.
     */
    public function siblings (Node $node):iterable;

}