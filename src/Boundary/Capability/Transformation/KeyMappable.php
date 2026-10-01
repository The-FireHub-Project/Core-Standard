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
 * ### Defines key mapping transformation
 *
 * Key mapping provides the ability to transform the keys of a data structure while preserving their associated
 * values.
 *
 * Implementations define how collisions are handled when multiple keys are transformed into the same key.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface KeyMappable {

    /**
     * ### Maps keys using the specified callback
     *
     * Creates a transformed representation by applying the specified callback to each key while preserving the
     * value associated with that key.
     * @since 1.0.0
     *
     * @param callable(TKey, TValue=):TKey $callback <p>
     * Callback used to transform each key.
     * </p>
     *
     * @return static<TKey, TValue> The resulting structure containing the mapped keys.
     */
    public function mapKeys (callable $callback):static;

}