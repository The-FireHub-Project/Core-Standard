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
 * ### Defines insertion at the back boundary
 *
 * Back insertion defines the ability to insert values at the back boundary of an ordered sequence.
 *
 * The capability defines the fundamental operation for adding values after the current last value without
 * prescribing how values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface BackInsertion {

    /**
     * ### Inserts values at the back
     *
     * Inserts one or more values at the back boundary as a single batch operation. The values are inserted in the
     * same order in which they are provided.
     * @since 1.0.0
     *
     * @param TValue ...$values <p>
     * The values to insert at the back.
     * </p>
     *
     * @return void
     */
    public function insertBack (mixed ...$values):void;

}