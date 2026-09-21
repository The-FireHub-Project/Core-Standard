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
 * ### Defines rejection capability
 *
 * Defines the ability to create a transformed instance containing only elements that do not satisfy a given
 * predicate.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Capability\Transformation\Filterable<TKey, TValue>
 */
interface Rejectable extends Filterable {

    /**
     * ### Rejects elements that satisfy the predicate
     *
     * Creates a transformed instance excluding elements for which the supplied callback evaluates to true.
     * @since 1.0.0
     *
     * @param callable(TValue, TKey=):bool $callback <p>
     * Predicate used to determine which elements should be rejected.
     * </p>
     *
     * @return static The transformed instance.
     */
    public function reject (callable $callback):static;

}