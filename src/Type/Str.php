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

namespace FireHub\Core\Type;

use FireHub\Core\Type\Str\Encoding;

/**
 * ### Defines the base string Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all string-based Value Objects.
 *
 * It provides immutable string value semantics while allowing concrete implementations to extend the type with
 * high-level string operations and domain-specific behavior.
 *
 * The class keeps the Core layer focused on defining the string value contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Str extends ValueObject {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():string;

    /**
     * ### Returns the encoding of the string
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Str\Encoding The encoding of the string.
     */
    abstract public function encoding ():Encoding;

    /**
     * ### Returns a new instance with the specified encoding
     * @since 1.0.0
     *
     * @param \FireHub\Core\Type\Str\Encoding $encoding<p>
     * The encoding to set.
     * </p>
     *
     * @return static The new instance with provided encoding.
     */
    abstract public function withEncoding (Encoding $encoding):static;

}