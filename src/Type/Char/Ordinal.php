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
use FireHub\Core\Exception\Runtime\System\Invariant\InvalidOrdinalException;

/**
 * ### Defines the ordinal value of a single byte
 *
 * Represents the unsigned numeric value of a byte within the range
 * from 0 to 255.
 *
 * Unlike a Unicode code point, an ordinal represents the numeric value of a raw byte without character-encoding
 * semantics.
 * @since 1.0.0
 *
 * @template TValue of int
 *
 * @extends \FireHub\Core\Type\Number\Integer<TValue>
 */
readonly class Ordinal extends Integer {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::guard() As a guard.
     *
     * @param TValue $value <p>
     * The ordinal value.
     * </p>
     *
     * @throws \FireHub\Core\Exception\Runtime\System\Invariant\InvalidOrdinalException If the condition is not met.
     * @throws \FireHub\Core\Exception\FireHubException If the condition is not met.
     * @throws \FireHub\Core\Type\Exception\ValueObjectException If the exception is not a FireHubException.
     *
     * @return void
     */
    public function __construct (
        private int $value
    ) {

        $this->guard(
            fn() => $value >= 0 && $value <= 0xFF,
            fn() => new InvalidOrdinalException('Value must be a valid byte ordinal between 0 and 255.')
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