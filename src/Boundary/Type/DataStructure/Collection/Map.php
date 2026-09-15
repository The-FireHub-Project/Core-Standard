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

use FireHub\Core\Boundary\Type\DataStructure\Classification\Associative;
use FireHub\Core\Boundary\Type\DataStructure\Collection;
use FireHub\Core\Boundary\Capability\Access\ {
    BoundaryAccess, KeyAccess
};

/**
 * ### Represents a collection that associates keys with values
 *
 * A map organizes its values through associations between keys and values, where each value is identified by a
 * corresponding key that provides deterministic access to the associated value.
 *
 * The map contract defines the fundamental semantics of an associative collection without prescribing whether
 * the collection is mutable, how key-value associations are stored, whether iteration order is significant, or
 * which underlying representation or implementation strategy is used.
 *
 * A map maintains at most one value associated with each key while allowing values to be retrieved according to
 * their corresponding keys.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Type\DataStructure\Collection<TKey, TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\BoundaryAccess<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Access\KeyAccess<TKey, TValue>
 */
interface Map extends Associative, Collection, BoundaryAccess, KeyAccess {}