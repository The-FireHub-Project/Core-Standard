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
 * ### Defines insertion of values into a data structure
 *
 * Insertion defines the ability to add values to a data structure without prescribing their resulting positions.
 *
 * The capability allows the implementing structure to determine how inserted values are organized according
 * to its ordering rules, structural constraints, or storage representation.
 * @since 1.0.0
 *
 * @template TValue
 */
interface Insertion {

    /**
     * ### Inserts values into the data structure
     *
     * Inserts one or more values according to the organizational rules of the implementing structure.
     *
     * The operation does not guarantee that inserted values occupy the front, back, or any particular position.
     * @since 1.0.0
     *
     * @param TValue ...$values <p>
     * Values to insert.
     * </p>
     *
     * @return void
     */
    public function insert (mixed ...$values):void;

}