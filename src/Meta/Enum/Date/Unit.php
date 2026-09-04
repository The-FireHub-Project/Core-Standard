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
     * ### Year
     *
     * A calendar year.
     * @since 1.0.0
     */
    case YEAR;

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

}