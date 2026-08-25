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

namespace FireHub\Core\Type\Temporal;

use FireHub\Core\Type\ValueObject;
use Stringable;

/**
 * ### Defines the base date and time Value Object type within the FireHub ecosystem
 *
 * This abstract class represents the foundation for all date and time-based Value Objects.
 *
 * It provides immutable date and time value semantics while allowing concrete implementations to define specific
 * behavior for representing and manipulating combined date and time values.
 *
 * The class keeps the Core layer focused on defining the date and time value contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of non-empty-string
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class DateTime extends ValueObject implements Stringable {

    /**
     * ### Returns the timezone of the date and time value
     * @since 1.0.0
     *
     * @return \FireHub\Core\Type\Temporal\Timezone The timezone of the date and time value.
     */
    abstract public function timezone ():Timezone;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():string;

    /**
     * ### Returns a new instance with the specified timezone
     * @since 1.0.0
     *
     * @param \FireHub\Core\Type\Temporal\Timezone $timezone <p>
     * The timezone to set.
     * </p>
     *
     * @return static The new instance with provided timezone.
     */
    abstract public function withTimezone (Timezone $timezone):static;

    /**
     * ### Returns the string representation of the value
     *
     * Provides the native PHP string representation of the Value Object.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\Temporal\DateTime::value() To get the string value.
     *
     * @return TValue The string representation of the value.
     */
    public function __toString ():string {

        return $this->value();

    }

}