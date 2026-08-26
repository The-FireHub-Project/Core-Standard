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
use Stringable;

/**
 * ### Defines the base string value object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all string-based Value Objects.
 *
 * It provides immutable string value semantics with encoding awareness while allowing concrete implementations
 * to define specific string constraints and domain-specific behavior.
 *
 * The class keeps the Core layer focused on defining the common string value contract, while concrete
 * implementations belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class StringValue extends ValueObject implements Stringable {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():string;

    /**
     * ### Returns the encoding of the string value
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Str\Encoding The encoding of the string value.
     */
    abstract public function encoding ():Encoding;

    /**
     * ### Returns the string representation of the value
     *
     * Provides the native PHP string representation of the Value Object.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\StringValue::value() To get the string value.
     *
     * @return TValue The string representation of the value.
     */
    public function __toString ():string {

        return $this->value();

    }

}