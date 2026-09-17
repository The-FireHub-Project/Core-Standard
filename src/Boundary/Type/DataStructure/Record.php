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
 * ### Defines the Record data structure
 *
 * A Record represents a structured value composed of a fixed set of logically related elements.
 *
 * Unlike a Collection, whose elements represent members of a collection, the elements of a Record represent
 * individual components of a single composite value.
 *
 * This contract defines only the semantic foundation shared by Record data structures and does not prescribe how
 * individual elements are identified, ordered, accessed, or represented. Concrete Record types may use positional,
 * named, or other forms of element identification.
 *
 * Record implementations may further define structural characteristics and access capabilities appropriate to
 * their semantics.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Type\Enumerable<TKey, TValue>
 */
interface Record extends DataStructure, Enumerable {}