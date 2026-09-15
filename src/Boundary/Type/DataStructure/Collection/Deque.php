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
use FireHub\Core\Boundary\Capability\Access\BoundaryAccess;
use FireHub\Core\Boundary\Type\DataStructure\Collection;

/**
 * ### Represents a linear collection that provides access to both ends of its values
 *
 * A deque organizes its values in an ordered logical sequence where values can be accessed from both the front and
 * back of the collection.
 *
 * The deque contract defines the fundamental semantics of a double-ended linear collection without prescribing
 * whether the collection is mutable, how values are stored, or which underlying representation or implementation
 * strategy is used.
 *
 * A deque preserves the relative order of its values while providing deterministic access to the values at both
 * boundaries of the sequence.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\BoundaryAccess<TValue>
 */
interface Deque extends Linear, Collection, BoundaryAccess {}