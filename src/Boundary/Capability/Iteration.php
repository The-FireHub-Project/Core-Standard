<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.1
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability;

/**
 * ### Defines iteration over a sequence of values
 *
 * Iteration provides access to an iterable sequence of values without prescribing how those values are stored,
 * represented, or traversed.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 */
interface Iteration {

    /**
     * ### Iterates over the values
     *
     * Returns an iterable sequence containing the values exposed by the implementation.
     * @since 1.0.0
     *
     * @return iterable<TKey, TValue>
     */
    public function iterate ():iterable;

}