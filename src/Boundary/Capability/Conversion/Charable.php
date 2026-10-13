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

/**
 * ### Defines conversion to character Value Objects
 *
 * Provides the ability to convert an object into an ordered list of FireHub character Value Objects.
 *
 * Each resulting element represents a single logical character according to the character model defined by the
 * implementing class.
 *
 * The capability defines the conversion contract without prescribing the source representation, character
 * encoding, or concrete character implementation.
 *
 * The resulting list preserves the logical ordering of characters in the source object.
 * @since 1.0.0
 */
interface Charable {

    /**
     * ### Converts the object to a list of character Value Objects
     *
     * Returns an ordered list of FireHub character Value Objects representing the object's character sequence.
     * @since 1.0.0
     *
     * @return list<\FireHub\Core\Type\Char<non-empty-string>> The resulting character Value Objects.
     */
    public function toChars ():array;

}