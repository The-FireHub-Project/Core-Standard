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

namespace FireHub\Core\Boundary\Type\DataStructure\Record;

use FireHub\Core\Boundary\Type\DataStructure\Classification\Linear;
use FireHub\Core\Boundary\Type\DataStructure\Record;
use FireHub\Core\Boundary\Capability\Access\ {
    BoundaryAccess, IndexAccess
};

/**
 * ### Defines the Tuple data structure
 *
 * A Tuple represents a fixed-size positional Record whose elements are identified by zero-based integer indexes.
 *
 * Elements are arranged in a defined linear order, and their positions form part of the Tuple structure. Unlike
 * general-purpose Collections, a Tuple represents a single composite value composed of a fixed number of logically
 * related elements.
 *
 * The number and positions of elements remain fixed for the lifetime of the Tuple. This contract does not provide
 * capabilities for inserting or removing elements.
 *
 * Tuple values may be heterogeneous and are represented collectively by the TValue template type.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Record<int, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\BoundaryAccess<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\IndexAccess<TValue>
 */
interface Tuple extends Linear, Record, BoundaryAccess, IndexAccess {}