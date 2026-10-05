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
 * ### Defines ancestor iteration
 *
 * Provides iteration over the ancestors of an element within a hierarchical structure.
 *
 * The element itself is not included in the iteration.
 * @since 1.0.0
 *
 * @template TValue
 */
interface AncestorIteration {

    /**
     * ### Iterates over ancestors
     *
     * Iterates over the ancestors of the specified element, starting with its immediate parent and continuing toward
     * the root.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue> $node <p>
     * Element whose ancestors to iterate over.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue>> Ancestors
     * ordered from the immediate parent toward the root.
     */
    public function ancestors (mixed $node):iterable;

}