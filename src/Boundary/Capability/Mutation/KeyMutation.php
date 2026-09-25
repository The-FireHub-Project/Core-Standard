<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Mutation;

use FireHub\Core\Meta\Enum\MutationOutcome;

/**
 * ### Defines key-based mutation of values
 *
 * Key mutation provides the ability to create, replace, and remove values identified by their keys.
 *
 * The capability defines the fundamental operations for modifying keyed values without prescribing how values
 * are stored, organized, or represented internally. Each mutation operation reports its result through a
 * MutationOutcome value.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface KeyMutation {

    /**
     * ### Sets the value associated with the specified key
     *
     * Associates the specified value with the given key. If the key does not exist, a new value is created. If the
     * key already exists, its current value is replaced.
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * The key with which to associate the value.
     * </p>
     * @param TValue $value <p>
     * The value to set.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the mutation: CREATED if a new value was
     * created, or UPDATED if an existing value was replaced.
     */
    public function set (mixed $key, mixed $value):MutationOutcome;

    /**
     * ### Removes the value associated with the specified key
     *
     * Removes the value associated with the specified key when it exists.
     * @since 1.0.0
     *
     * @param TKey $key <p>
     * The key whose associated value should be removed.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the mutation: REMOVED if a value was removed,
     * or NOT_FOUND if the key does not exist.
     */
    public function remove (mixed $key):MutationOutcome;

}