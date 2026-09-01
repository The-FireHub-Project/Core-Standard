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
 * ### Represents a data structure that organizes a group of values as a logical collection
 *
 * A collection provides a common contract for data structures that contain multiple values and expose those
 * values as an enumerable group. Collections may provide different mechanisms for accessing, ordering,
 * associating, inserting, removing, or otherwise manipulating their values depending on their specialized
 * structure.
 *
 * The collection contract does not prescribe a particular internal representation, ordering strategy, key model,
 * or storage mechanism. Specialized collection contracts define the semantics required by particular collection
 * types, such as linear, associative, or unordered collections.
 *
 * A collection is a specialized form of data structure and therefore inherits the fundamental data-organization
 * contract defined by DataStructure.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure<TValue>
 * @extends \FireHub\Core\Boundary\Type\Enumerable<mixed, TValue>
 */
interface Collection extends DataStructure, Enumerable {}