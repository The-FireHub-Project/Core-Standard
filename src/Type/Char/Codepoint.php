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

use FireHub\Core\Type\Number\Integer;
use FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodepointException;

/**
 * ### Defines a Unicode code point value object
 *
 * The Codepoint class represents a valid Unicode scalar value within the FireHub ecosystem.
 *
 * A Unicode code point is represented by an integer in the range from U+0000 to U+10FFFF, excluding the
 * surrogate range U+D800 through U+DFFF.
 *
 * The class provides immutable value semantics for Unicode code points while allowing concrete implementations
 * to define how the underlying value is stored and validated.
 * @since 1.0.0
 *
 * @template TValue of int
 *
 * @extends \FireHub\Core\Type\Number\Integer<TValue>
 */
readonly class Codepoint extends Integer {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::guard() As a guard.
     *
     * @param TValue $value <p>
     * The code point value.
     * </p>
     *
     * @throws \FireHub\Core\Exception\Runtime\System\Invariant\InvalidCodepointException If the condition is not met.
     * @throws \FireHub\Core\Exception\FireHubException If the condition is not met.
     * @throws \FireHub\Core\Type\Exception\ValueObjectException If the exception is not a FireHubException.
     *
     * @return void
     */
    public function __construct (
        private int $value
    ) {

        $this->guard(
            fn() => $value >= 0 && $value <= 0x10FFFF && ($value < 0xD800 || $value > 0xDFFF),
            fn() => new InvalidCodepointException('Value must be a valid Unicode code point.')
        );

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():int {

        return $this->value;

    }

}