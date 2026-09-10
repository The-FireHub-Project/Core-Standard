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
 * ### Defines bidirectional iteration over a sequence of values
 *
 * Bidirectional iteration extends standard iteration with access to the same sequence in reverse order without
 * prescribing how those values are stored or represented.
 * @since 1.0.0
 *
 * @template TKey
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Capability\Iteration<TKey, TValue>
 */
interface BidirectionalIteration extends Iteration {

    /**
     * ### Iterates over the values in reverse order
     *
     * Returns an iterable sequence containing the values exposed by the implementation in reverse iteration order.
     * @since 1.0.0
     *
     * @return iterable<TKey, TValue>
     */
    public function iterateReverse ():iterable;

}