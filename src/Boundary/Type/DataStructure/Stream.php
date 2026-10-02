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

namespace FireHub\Core\Boundary\Type\DataStructure;

use FireHub\Core\Boundary\Type\ {
    DataStructure, Enumerable
};

/**
 * ### Defines the Stream data structure
 *
 * Represents a sequence of values that may be produced lazily as they are consumed.
 *
 * A Stream does not require its complete contents to be materialized in memory and may represent finite,
 * unbounded, or externally produced sequences of values.
 *
 * Unlike collections, a Stream does not imply reusable iteration, known size, random access, or mutable storage.
 * Concrete implementations define how values are produced and whether the underlying source may be consumed more
 * than once.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Type\Enumerable<TKey, TValue>
 */
interface Stream extends DataStructure, Enumerable {}