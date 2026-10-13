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
 * ### Defines the days of the week
 *
 * The Weekday enum defines the seven days of the Gregorian calendar week.
 *
 * Each case represents a specific day of the week and provides its corresponding numeric value according to the
 * native PHP date and time representation.
 * @since 1.0.0
 */
enum WeekDay:int {

    /**
     * ### Sunday
     *
     * The first day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case SUNDAY = 0;

    /**
     * ### Monday
     *
     * The second day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case MONDAY = 1;

    /**
     * ### Tuesday
     *
     * The third day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case TUESDAY = 2;

    /**
     * ### Wednesday
     *
     * The fourth day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case WEDNESDAY = 3;

    /**
     * ### Thursday
     *
     * The fifth day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case THURSDAY = 4;

    /**
     * ### Friday
     *
     * The sixth day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case FRIDAY = 5;

    /**
     * ### Saturday
     *
     * The seventh day of the week according to the native PHP date and time representation.
     * @since 1.0.0
     */
    case SATURDAY = 6;

    /**
     * ### Returns the ISO weekday number
     *
     * Returns the numeric representation of the weekday according to ISO 8601, where Monday is 1 and Sunday is 7.
     * @since 1.0.0
     *
     * @return int<1,7> The ISO weekday number.
     */
    public function isoValue ():int {

        return match ($this) {
            self::MONDAY => 1,
            self::TUESDAY => 2,
            self::WEDNESDAY => 3,
            self::THURSDAY => 4,
            self::FRIDAY => 5,
            self::SATURDAY => 6,
            self::SUNDAY => 7,
        };

    }

    /**
     * ### Returns the long name of the weekday
     * @since 1.0.0
     *
     * @return non-empty-string The long name of the weekday.
     */
    public function longName ():string {

        return match ($this) {
            self::SUNDAY => 'Sunday',
            self::MONDAY => 'Monday',
            self::TUESDAY => 'Tuesday',
            self::WEDNESDAY => 'Wednesday',
            self::THURSDAY => 'Thursday',
            self::FRIDAY => 'Friday',
            self::SATURDAY => 'Saturday',
        };

    }

    /**
     * ### Returns the short name of the weekday
     * @since 1.0.0
     *
     * @return non-empty-string The short name of the weekday.
     */
    public function shortName ():string {

        return match ($this) {
            self::SUNDAY => 'Sun',
            self::MONDAY => 'Mon',
            self::TUESDAY => 'Tue',
            self::WEDNESDAY => 'Wed',
            self::THURSDAY => 'Thu',
            self::FRIDAY => 'Fri',
            self::SATURDAY => 'Sat',
        };

    }

}