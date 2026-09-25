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
 * ### Defines insertion at the front boundary
 *
 * Front insertion defines the ability to insert values at the front boundary of an ordered sequence.
 *
 * The capability defines the fundamental operation for adding values before the current first value without
 * prescribing how values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface FrontInsertion {

    /**
     * ### Inserts values at the front
     *
     * Inserts one or more values at the front boundary as a single batch operation. The values are inserted in the
     * same order in which they are provided, so the first provided value becomes the first newly inserted value.
     * @since 1.0.0
     *
     * @param TValue ...$values <p>
     * The values to insert at the front.
     * </p>
     *
     * @return void
     */
    public function insertFront (mixed ...$values):void;

}