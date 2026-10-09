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
 * ### Defines indexed insertion of values
 *
 * Indexed insertion provides the ability to insert a single value at a specified position within an ordered
 * collection.
 *
 * Inserting a value shifts the existing element at the specified index, along with all later elements, one position
 * toward the end of the collection while preserving their relative order.
 *
 * The insertion index may refer to an existing element or the position immediately following the last element.
 * Inserting at index zero prepends the value, while inserting at the collection size appends it.
 *
 * The capability defines the logical behavior of indexed insertion without prescribing how values are stored,
 * organized, or shifted internally.
 *
 * Each insertion operation reports its result through a MutationOutcome value.
 * @since 1.0.0
 *
 * @template TValue
 */
interface IndexInsertion {

    /**
     * ### Inserts a value at the specified index
     *
     * Inserts a single value before the element currently occupying the specified index.
     *
     * Existing elements at and after the insertion position are shifted one index toward the end of the collection.
     * Their relative ordering remains unchanged.
     *
     * An index equal to the collection size appends the value. Negative indexes and indexes greater than the
     * collection size are invalid and do not modify the collection.
     *
     * A successful insertion increases the collection size by exactly one element.
     * @since 1.0.0
     *
     * @param int $index <p>
     * Zero-based insertion index.
     * </p>
     * @param TValue $value <p>
     * Value to insert.
     * </p>
     *
     * @return \FireHub\Core\Meta\Enum\MutationOutcome The outcome of the replacement: CREATED if the value was
     * inserted, or NOT_FOUND if the index does not exist.
     */
    public function insertAt (int $index, mixed $value):MutationOutcome;

}