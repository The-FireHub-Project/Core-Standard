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

namespace FireHub\Core\Type\Str;

use FireHub\Core\Type\Str;

/**
 * ### Defines the base-encoded string Value Object type within the FireHub ecosystem
 *
 * This abstract class represents string-based Value Objects whose content is interpreted according to a specific
 * character encoding.
 *
 * It extends the base string type by requiring implementations to expose their character encoding.
 *
 * The class does not impose a specific encoding or character representation. Implementations may use single-byte or
 * multibyte character encodings.
 *
 * Character validation, encoding conversion, and string manipulation belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of string
 *
 * @extends \FireHub\Core\Type\Str<TValue>
 */
abstract readonly class Encoded extends Str {

    /**
     * ### Returns the character encoding of the string value
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Str\Encoding The character encoding.
     */
    abstract public function encoding ():Encoding;

}