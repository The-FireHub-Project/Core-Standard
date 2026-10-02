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
use FireHub\Core\Boundary\Capability\Access\ValueAccess;

/**
 * ### Defines the Set data structure
 *
 * Represents a collection of unique values where each value can occur at most once.
 *
 * A Set defines membership based on value equality and does not associate values with separate keys.
 *
 * The contract defines the fundamental semantics of a Set without prescribing how values are stored, how uniqueness
 * is enforced, or how membership lookup is implemented internally.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<int, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\ValueAccess<TValue>
 */
interface Set extends Unordered, Collection, ValueAccess {}