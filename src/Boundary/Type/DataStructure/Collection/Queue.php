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

use FireHub\Core\Boundary\Type\DataStructure\Classification\Linear;
use FireHub\Core\Boundary\Type\DataStructure\Collection;
use FireHub\Core\Boundary\Capability\Access\FrontAccess;

/**
 * ### Represents a linear collection that provides first-in, first-out access to its values
 *
 * A queue organizes its values in an ordered logical sequence according to first-in, first-out semantics, where
 * the earliest added value represents the front of the collection and is the first value available for retrieval.
 *
 * The queue contract defines the fundamental semantics of a first-in, first-out linear collection without
 * prescribing whether the collection is mutable, how values are stored, or which underlying representation or
 * implementation strategy is used.
 *
 * A queue preserves the relative order of its values while providing deterministic access to the value at the
 * front of the sequence.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\FrontAccess<TValue>
 */
interface Queue extends Linear, Collection, FrontAccess {}