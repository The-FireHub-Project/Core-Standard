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

use FireHub\Core\Type\Maybe;

/**
 * ### Defines removal from the back boundary
 *
 * Back removal defines the ability to remove and return the value at the back boundary of an ordered sequence.
 *
 * The capability defines the fundamental operation for removing the current last value without prescribing how
 * values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface BackRemoval {

    /**
     * ### Removes and returns the last value
     *
     * Removes the value currently located at the back boundary and returns the removed value. If no value exists,
     * an empty Maybe is returned.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Maybe<TValue|mixed> The removed value, or an empty Maybe if no value exists.
     */
    public function removeBack ():Maybe;

}