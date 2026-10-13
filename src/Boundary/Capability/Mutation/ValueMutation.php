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
 * ### Defines value-based mutation
 *
 * Value mutation provides the ability to add and remove values using the value itself as the mutation target.
 *
 * The capability defines the fundamental mutation operations without prescribing how values are stored, compared,
 * indexed, or modified internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface ValueMutation {

    /**
     * ### Adds a value
     *
     * Adds a value to the sequence. If the value already exists, it is ignored.
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value to add.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the mutation: CREATED if a new value was
     * created, or ALREADY_EXISTS if the value already exists.
     */
    public function add (mixed $value):MutationOutcome;

    /**
     * ### Removes a value
     *
     * Removes a value from the sequence. If the value does not exist, it is ignored.
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value to remove.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the mutation: REMOVED if a value was removed,
     * or NOT_FOUND if the key does not exist.
     */
    public function remove (mixed $value):MutationOutcome;

}