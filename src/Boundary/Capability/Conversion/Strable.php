<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Conversion;

use FireHub\Core\Type\Str;

/**
 * ### Defines conversion to a string Value Object
 *
 * Provides the ability to convert an object into a FireHub string Value Object.
 *
 * The capability defines the conversion contract without prescribing how the string representation is constructed,
 * which character encoding is used, or which concrete string implementation is returned.
 *
 * Implementations may construct the resulting string from stored values, logical elements, internal segments, or
 * other representations while preserving the semantic meaning of the source object.
 * @since 1.0.0
 */
interface Strable {

    /**
     * ### Converts the object to a string Value Object
     *
     * Returns a FireHub string Value Object representing the object's string content.
     *
     * The concrete string implementation and character encoding are determined by the implementing class.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Str<string> The resulting string Value Object.
     */
    public function toStr ():Str;

}