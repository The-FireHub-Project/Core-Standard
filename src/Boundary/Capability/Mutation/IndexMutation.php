<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Mutation;

use FireHub\Core\Meta\Enum\MutationOutcome;

/**
 * ### Defines indexed mutation of values
 *
 * Indexed mutation provides the ability to create, replace, and remove values identified by an integer index.
 *
 * The capability defines the fundamental operations for modifying indexed values without prescribing how values
 * are stored, organized, or represented internally. Each mutation operation reports its result through a
 * MutationOutcome value.
 * @since 1.0.0
 *
 * @template TValue
 */
interface IndexMutation {

    /**
     * ### Sets the value at the specified index
     *
     * Associates the specified value with the given index. If the index does not exist, a new value is created.
     * If the index already exists, its current value is replaced.
     * @since 1.0.0
     *
     * @param int $index <p>
     * The index at which to set the value.
     * </p>
     *
     * @param TValue $value <p>
     * The value to set.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the mutation: CREATED if a new value was
     * created, UPDATED if an existing value was replaced or NOT_FOUND if the index does not exist.
     */
    public function set (int $index, mixed $value):MutationOutcome;

    /**
     * ### Removes the value at the specified index
     *
     * Removes the value associated with the specified index when it exists.
     * @since 1.0.0
     *
     * @param int $index <p>
     * The index of the value to remove.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the mutation: REMOVED if a value was removed,
     * or NOT_FOUND if the index does not exist.
     */
    public function remove (int $index):MutationOutcome;

}