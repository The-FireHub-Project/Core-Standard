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

/**
 * ### Defines the base numeric Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all numeric-based Value Objects.
 *
 * It provides immutable numeric value semantics while allowing concrete implementations to define specific numeric
 * behavior for different numeric representations, such as integers and decimal values.
 *
 * The class keeps the Core layer focused on defining the numeric value contract, while concrete implementations belong
 * to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of numeric|numeric-string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Number extends ValueObject {

    /**
     * ### Checks if the number is positive
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\Number::value() To get the value.
     *
     * @return bool Whether the number is positive.
     */
    public function isPositive ():bool {

        return $this->value() > 0;

    }

    /**
     * ### Checks if the number is negative
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\Number::value() To get the value.
     *
     * @return bool Whether the number is negative.
     */
    public function isNegative ():bool {

        return $this->value() < 0;

    }

    /**
     * ### Checks if the number is zero
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\Number::value() To get the value.
     *
     * @return bool Whether the number is zero.
     */
    public function isZero ():bool {

        return (float)$this->value() === 0.0;

    }

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():int|float|string;

}