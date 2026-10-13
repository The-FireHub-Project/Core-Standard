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
 * ### Defines access to the back boundary value
 *
 * Back access provides read-only access to the last value of an ordered sequence.
 *
 * The capability defines the fundamental operation for retrieving the value at the back boundary without
 * prescribing how values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 */
interface BackAccess {

    /**
     * ### Returns the last value
     *
     * Returns the value at the end of the sequence when it exists.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Maybe<TValue|mixed> The last value, or an empty Maybe if no value exists.
     */
    public function last ():Maybe;

}