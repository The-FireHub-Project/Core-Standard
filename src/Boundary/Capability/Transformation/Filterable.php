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
 * ### Defines value filtering capability
 *
 * Represents the capability of producing a structure containing only values that satisfy a specified predicate.
 *
 * Each value is evaluated by the specified callback and retained in the resulting structure when the callback
 * evaluates to true.
 *
 * Implementations determine the concrete type, key semantics, and execution strategy of the resulting structure.
 * Filtering may therefore be performed eagerly, lazily, or through another implementation-specific strategy.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface Filterable {

    /**
     * ### Filters values
     *
     * Produces a structure containing only values that satisfy the specified predicate.
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * Predicate used to determine whether each value should be retained.
     * </p>
     *
     * @return static The resulting structure containing the filtered values.
     */
    public function filter (callable $callback):static;

}