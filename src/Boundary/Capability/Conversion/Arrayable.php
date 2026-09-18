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

namespace FireHub\Core\Boundary\Capability\Conversion;

/**
 * ### Defines conversion to an array representation
 *
 * Array conversion provides the ability to represent the values of an object as a PHP array.
 *
 * The capability defines the fundamental operation for producing an array representation without prescribing how
 * values are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TKey of array-key
 * @template TValue
 */
interface Arrayable {

    /**
     * ### Returns the array representation
     *
     * Returns the values represented as a PHP array while preserving their logical keys when applicable.
     * @since 1.0.0
     *
     * @return array<TKey, TValue> The array representation.
     */
    public function toArray ():array;

}