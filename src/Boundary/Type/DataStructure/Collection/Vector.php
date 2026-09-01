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

use FireHub\Core\Boundary\Type\DataStructure\Collection;

/**
 * ### Represents a linear collection that provides indexed access to its values
 *
 * A vector organizes its values in a contiguous logical sequence where each value is associated with a
 * zero-based integer index. Values can be accessed, replaced, added, or removed according to their position
 * within the sequence.
 *
 * The vector contract defines positional access and modification without prescribing the underlying storage
 * representation, memory layout, capacity management, or implementation strategy.
 *
 * A vector preserves the relative order of its values and allows the sequence to grow or shrink dynamically.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends Collection<int, TValue>
 */
interface Vector extends Collection {}