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

/**
 * ### Defines multiplicity-based value mutation
 *
 * Multiplicity mutation provides the ability to add and remove a specified number of occurrences of a value and
 * remove all occurrences of a value.
 *
 * The capability applies to objects whose mutation semantics allow logically equal values to occur multiple times.
 * It does not prescribe how values, occurrence counts, or equality semantics are represented internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface MultiplicityMutation {

    /**
     * ### Adds occurrences of a value
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value whose occurrences should be added.
     * </p>
     *
     * @param positive-int $count <p>
     * The number of occurrences to add.
     * </p>
     */
    public function add (mixed $value, int $count = 1):void;

    /**
     * ### Removes occurrences of a value
     *
     * Removes up to the specified number of occurrences of the value.
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value whose occurrences should be removed.
     * </p>
     *
     * @param positive-int $count <p>
     * The maximum number of occurrences to remove.
     * </p>
     *
     * @return non-negative-int The number of occurrences actually removed.
     */
    public function remove (mixed $value, int $count = 1):int;

    /**
     * ### Removes all occurrences of a value
     * @since 1.0.0
     *
     * @param TValue $value <p>
     * The value whose occurrences should be removed.
     * </p>
     *
     * @return non-negative-int The number of occurrences removed.
     */
    public function removeAll (mixed $value):int;

}