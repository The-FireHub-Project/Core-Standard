<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Type\DataStructure\Collection;

use FireHub\Core\Boundary\Type\DataStructure\Classification\Hierarchical;
use FireHub\Core\Boundary\Type\DataStructure\Collection;
use FireHub\Core\Boundary\Capability\ {
    Access\ChildAccess, Access\RootAccess,
    AncestorIteration, DescendantIteration,
};

/**
 * ### Defines a tree data structure
 *
 * A tree is a hierarchical collection whose elements are organized through parent-child relationships around a
 * single root.
 *
 * Each element, except the root, has exactly one parent and may have zero or more children. Elements without
 * children are the leaves. The structure is acyclic and every element is reachable from the root.
 *
 * This contract defines the structural identity of a tree without prescribing branching constraints, traversal
 * order, node representation, mutation behavior, balancing rules, ordering semantics, or storage implementation.
 *
 * Specialized tree structures may impose additional invariants such as a fixed branching factor, value ordering,
 * balancing, or search semantics.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Capability\AncestorIteration<TValue>
 * @extends \FireHub\Core\Boundary\Capability\DescendantIteration<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\RootAccess<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\ChildAccess<TValue>
 */
interface Tree extends Hierarchical, Collection, AncestorIteration, DescendantIteration, RootAccess, ChildAccess {}