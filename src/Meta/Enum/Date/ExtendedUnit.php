<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Meta\Enum\Date;

/**
 * ### Defines extended date and time units
 *
 * The ExtendedUnit enum defines calendar-derived date and time units supported by the FireHub temporal system.
 *
 * Each case represents an extended temporal unit that provides higher-level calendar semantics beyond the
 * fundamental date and time units.
 * @since 1.0.0
 */
enum ExtendedUnit {

    /**
     * ### Millennium
     *
     * A period of time spanning 1,000 years.
     * @since 1.0.0
     */
    case MILLENNIUM;

    /**
     * ### Century
     *
     * A period of time spanning 100 years.
     * @since 1.0.0
     */
    case CENTURY;

    /**
     * ### Decade
     *
     * A period of time spanning 10 years.
     * @since 1.0.0
     */
    case DECADE;

    /**
     * ### Quarter
     *
     * A calendar quarter.
     * @since 1.0.0
     */
    case QUARTER;

    /**
     * ### Get the base unit
     *
     * Returns the base temporal unit from which the current unit is derived.
     *
     * The base unit represents the unit to which the current unit can be reduced using its conversion factor.
     * @since 1.0.0
     *
     * @return null|self The base unit, or null if the unit is not derived from another unit.
     */
    public function base ():?Unit {

        return match ($this) {
            self::MILLENNIUM, self::CENTURY, self::DECADE => Unit::YEAR,
            self::QUARTER => Unit::MONTH
        };

    }

    /**
     * ### Get the conversion factor
     *
     * Returns the number of base units contained in one instance of the current unit.
     *
     * The factor defines the relationship between the current unit and its base unit.
     * @since 1.0.0
     *
     * @return int<1,max> The number of base units represented by one current unit.
     */
    public function factor ():int {

        return match ($this) {
            self::MILLENNIUM => 1000,
            self::CENTURY => 100,
            self::DECADE => 10,
            self::QUARTER => 3
        };

    }

}