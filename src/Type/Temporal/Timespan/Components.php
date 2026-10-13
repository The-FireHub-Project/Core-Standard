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

namespace FireHub\Core\Type\Temporal\Timespan;

use FireHub\Core\Type\ValueObject;

/**
 * ### Defines the base temporal Timespan components Value Object type within the FireHub ecosystem
 *
 * The TimespanComponents class represents the individual calendar-independent components of an elapsed timespan.
 *
 * It provides immutable value semantics for decomposed timespan values while allowing concrete implementations to
 * define how individual components are represented and calculated.
 *
 * The class keeps the Core layer focused on defining the timespan components contract, while concrete implementations
 * belong to higher-level layers such as Foundation.
 * @since 1.0.0
 *
 * @template TValue of array{
 *     days: numeric-string,
 *     hours: int<0,23>,
 *     minutes: int<0,59>,
 *     seconds: int<0,59>,
 *     microseconds: int<0,999999>
 * }
 *
 * @extends \FireHub\Core\Type\ValueObject<TValue>
 */
abstract readonly class Components extends ValueObject {

    /**
     * ### Returns the number of days
     * @since 1.0.0
     *
     * @return numeric-string The number of days.
     */
    abstract public function days ():string;

    /**
     * ### Returns the number of hours
     * @since 1.0.0
     *
     * @return int<0,23> The number of hours.
     */
    abstract public function hours ():int;

    /**
     * ### Returns the number of minutes
     * @since 1.0.0
     *
     * @return int<0,59> The number of minutes.
     */
    abstract public function minutes ():int;

    /**
     * ### Returns the number of seconds
     * @since 1.0.0
     *
     * @return int<0,59> The number of seconds.
     */
    abstract public function seconds ():int;

    /**
     * ### Returns the number of microseconds
     * @since 1.0.0
     *
     * @return int<0,999999> The number of microseconds.
     */
    abstract public function microseconds ():int;

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    abstract public function value ():array;

}