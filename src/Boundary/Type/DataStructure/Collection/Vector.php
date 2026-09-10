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

use FireHub\Core\Boundary\Capability\Access\IndexAccess;
use FireHub\Core\Boundary\Type\DataStructure\Collection;

/**
 * ### Represents a linear collection that provides indexed access to its values
 *
 * A vector organizes its values in an ordered logical sequence where each value is associated with an integer
 * index, providing positional access to the values contained within the collection.
 *
 * The vector contract defines the fundamental semantics of an indexed linear collection without prescribing
 * whether the collection is mutable, how values are stored, or which underlying representation or implementation
 * strategy is used.
 *
 * A vector preserves the relative order of its values while providing deterministic access to individual values
 * according to their position within the sequence.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\IndexAccess<TValue>
 */
interface Vector extends Collection, IndexAccess {}