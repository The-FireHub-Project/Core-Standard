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

use Stringable;

/**
 * ### Represents a URI reference
 *
 * Defines the base abstraction for immutable URI references.
 *
 * Supports absolute URIs and relative URI references according to RFC 3986.
 *
 * Concrete implementations define URI components, validation, parsing, and serialization.
 * @since 1.0.0
 *
 * @template TValue of string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Uri extends ValueObject implements Stringable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():string;

    /**
     * ### Returns the string representation of the value
     *
     * Provides the native PHP string representation of the Value Object.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\Uri::value() To get the string value.
     *
     * @return TValue The string representation of the value.
     */
    public function __toString ():string {

        return $this->value();

    }

}