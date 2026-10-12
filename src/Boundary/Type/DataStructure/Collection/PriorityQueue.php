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
use FireHub\Core\Boundary\Type\DataStructure\Classification\Linear;
use FireHub\Core\Boundary\Type\DataStructure\Collection;

/**
 * ### Defines a priority queue data structure
 *
 * Represents a linear collection of elements organized according to their assigned priorities.
 *
 * A priority queue determines the order in which elements become available for retrieval based on their relative
 * priorities rather than their insertion order. Elements with higher precedence are selected before elements with
 * lower precedence, according to the priority ordering rules established by the implementation.
 *
 * This contract defines the fundamental characteristics shared by priority queue data structures without
 * prescribing how priorities are represented, compared, assigned, or maintained. It does not impose a particular
 * internal storage representation, ordering direction, stability guarantee for equal priorities, or requirement
 * for globally sorted iteration.
 *
 * Specialized priority queue contracts may extend this abstraction to define additional priority management,
 * ordering semantics, stability guarantees, or operational capabilities appropriate to their implementation.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\FrontAccess<TValue>
 */
interface PriorityQueue extends Linear, Collection, FrontAccess {}