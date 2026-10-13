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

use FireHub\Core\Boundary\Capability\Access\FrontAccess;
use FireHub\Core\Boundary\Type\DataStructure\Classification\Hierarchical;
use FireHub\Core\Boundary\Type\DataStructure\Collection;

/**
 * ### Defines a heap data structure
 *
 * Represents a collection of elements organized according to a heap-ordering invariant.
 *
 * A heap maintains a priority relationship between its elements, ensuring that an element with the highest
 * precedence according to the heap's ordering rules is available at the top of the structure. The ordering
 * relationship may be defined by natural value ordering, a comparator, or another implementation-specific
 * priority strategy.
 *
 * This contract defines the fundamental characteristics shared by heap-based data structures without prescribing
 * how elements are represented, accessed, traversed, or modified. It does not impose a particular branching factor,
 * internal storage representation, comparison strategy, or requirement for globally sorted iteration.
 *
 * Specialized heap contracts may extend this abstraction to define additional structural constraints, ordering
 * semantics, merging capabilities, or operational guarantees appropriate to their particular implementation.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\FrontAccess<TValue>
 */
interface Heap extends Hierarchical, Collection, FrontAccess {}