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

namespace FireHub\Core\Boundary\Capability\Access;

use FireHub\Core\Type\Maybe;

/**
 * ### Defines access to the front boundary value
 *
 * Front access provides read-only access to the first value of an ordered sequence.
 *
 * The capability defines the fundamental operation for retrieving the value at the front boundary without
 * prescribing how values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface FrontAccess {

    /**
     * ### Returns the first value
     *
     * Returns the value at the beginning of the sequence when it exists.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Maybe<TValue|mixed> The first value, or an empty Maybe if no value exists.
     */
    public function first ():Maybe;

}