<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core
 */

namespace FireHub\Core\Type\Char;

use FireHub\Core\Type\StringValue;
use FireHub\Core\Type\Str\Encoding;

/**
 * ### Defines the base encoded character Value Object type within the FireHub ecosystem
 *
 * This abstract class represents a single character interpreted according to a specific character encoding.
 *
 * It extends the base character type by requiring implementations to expose their character encoding.
 *
 * A character may occupy one or more bytes depending on the encoding.
 *
 * Character validation and encoding-specific operations belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of non-empty-string
 *
 * @extends \FireHub\Core\Type\StringValue<TValue>
 */
abstract readonly class Encoded extends StringValue {

    /**
     * ### Returns the character encoding of the character value
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Str\Encoding The character encoding.
     */
    abstract public function encoding ():Encoding;

    /**
     * ### Returns the Unicode code point for the character
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Char\Codepoint<non-negative-int> The Unicode code point for the character.
     */
    abstract public function codepoint ():Codepoint;

}