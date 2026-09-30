<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Transformation;

/**
 * ### Defines concatenation capability
 *
 * Defines the capability for producing a structure containing the values of the current structure followed by the
 * values provided by another iterable source.
 * @since 1.0.0
 *
 * @template TValue
 */
interface Concatenable {

    /**
     * ### Concatenates values
     *
     * Creates a new instance containing the values of the current structure followed by the specified values while
     * preserving their iteration order.
     * @since 1.0.0
     *
     * @param iterable<TValue> $values <p>
     * The values to concatenate.
     * </p>
     *
     * @return static A new instance containing the concatenated values.
     */
    public function concat (iterable $values):static;

}