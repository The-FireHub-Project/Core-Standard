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
 * ### Defines basic date and time units
 *
 * The Unit enum defines the fundamental calendar and time units supported by the FireHub temporal system.
 *
 * Each case represents a basic temporal unit that can be used as a reference for date and time calculations,
 * comparisons, intervals, and conversions.
 * @since 1.0.0
 */
enum Unit {

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
     * ### Year
     *
     * A calendar year.
     * @since 1.0.0
     */
    case YEAR;

    /**
     * ### Quarter
     *
     * A calendar quarter.
     * @since 1.0.0
     */
    case QUARTER;

    /**
     * ### Month
     *
     * A calendar month.
     * @since 1.0.0
     */
    case MONTH;

    /**
     * ### Fortnight
     *
     * A period of time spanning 14 days.
     * @since 1.0.0
     */
    case FORTNIGHT;

    /**
     * ### Week
     *
     * A calendar week.
     * @since 1.0.0
     */
    case WEEK;

    /**
     * ### Week day
     *
     * A day of the week.
     * @since 1.0.0
     */
    case WEEKDAY;

    /**
     * ### Day
     *
     * A calendar day.
     * @since 1.0.0
     */
    case DAY;

    /**
     * ### Hour
     *
     * An hour of time.
     * @since 1.0.0
     */
    case HOUR;

    /**
     * ### Minute
     *
     * A minute of time.
     * @since 1.0.0
     */
    case MINUTE;

    /**
     * ### Second
     *
     * A second of time.
     * @since 1.0.0
     */
    case SECOND;

    /**
     * ### Millisecond
     *
     * A millisecond of time.
     * @since 1.0.0
     */
    case MILLISECOND;

    /**
     * ### Microsecond
     *
     * A microsecond of time.
     * @since 1.0.0
     */
    case MICROSECOND;

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
    public function base ():?self {

        return match ($this) {
            self::MILLENNIUM, self::CENTURY, self::DECADE => self::YEAR,
            self::QUARTER => self::MONTH,
            self::FORTNIGHT => self::DAY,
            default => null
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
            self::FORTNIGHT => 14,
            self::DECADE => 10,
            self::QUARTER => 3,
            default => 1
        };

    }

}