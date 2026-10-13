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

use FireHub\Core\Boundary\Type\DataStructure\Classification\Unordered;
use FireHub\Core\Boundary\Type\DataStructure\Collection;
use FireHub\Core\Boundary\Capability\Access\MultiplicityAccess;

/**
 * ### Defines the Bag data structure
 *
 * Represents an unordered collection of values where logically equal values may occur multiple times.
 *
 * A Bag preserves the multiplicity of its values without assigning positional or user-defined key semantics to
 * individual occurrences.
 *
 * The number of occurrences of a particular value forms part of the observable semantics of the data structure,
 * while the ordering of those occurrences does not.
 *
 * The contract defines the fundamental semantics of a Bag without prescribing how values, occurrence counts,
 * equality, or storage are represented internally.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<int, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\MultiplicityAccess<TValue>
 */
interface Bag extends Unordered, Collection, MultiplicityAccess {}