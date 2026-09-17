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

use FireHub\Core\Boundary\Type\DataStructure\Record;
use FireHub\Core\Boundary\Capability\Access\KeyAccess;

/**
 * ### Defines the Struct data structure
 *
 * A Struct represents a fixed-size keyed Record whose elements are identified by integer or string keys.
 *
 * Each key identifies a distinct component of a single composite value and forms part of the Struct's defined
 * structure. The set of keys remains fixed for the lifetime of the Struct.
 *
 * Unlike a Map, which represents a dynamically changing collection of key-value associations, a Struct represents
 * a single structured value with a fixed set of keyed elements. Insertion and removal operations are therefore not
 * part of the Struct contract.
 *
 * Struct elements may contain values of different types, represented collectively by the TValue template type.
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Record<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\KeyAccess<TKey, TValue>
 */
interface Struct extends Record, KeyAccess {}