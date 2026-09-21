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
 * ### Defines value mapping capability
 *
 * Represents the capability of transforming the values of a structure using a mapping operation.
 *
 * Each value is passed to the specified callback and replaced in the resulting structure by the value produced by
 * that callback.
 *
 * Implementations determine the concrete type and execution strategy of the resulting structure. Mapping may
 * therefore be performed eagerly, lazily, or through another implementation-specific strategy.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface Mappable {

    /**
     * ### Maps values
     *
     * Applies the specified mapping operation to each value.
     * @since 1.0.0
     *
     * @template TMapped
     *
     * @param callable(TValue, TKey=):TMapped $callback <p>
     * Mapping operation to apply to each value.
     * </p>
     *
     * @return static<TKey, TMapped> The resulting structure containing the mapped values.
     */
    public function map (callable $callback):static;

}