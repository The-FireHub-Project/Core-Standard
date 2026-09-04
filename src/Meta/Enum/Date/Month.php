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
 * ### Defines calendar months
 *
 * The Month enum defines the twelve months of the Gregorian calendar.
 *
 * Each case represents a specific calendar month and provides its corresponding numeric month value.
 * @since 1.0.0
 */
enum Month:int {

    /**
     * ### January
     *
     * The first month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case JANUARY = 1;

    /**
     * ### February
     *
     * The second month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case FEBRUARY = 2;

    /**
     * ### March
     *
     * The third month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case MARCH = 3;

    /**
     * ### April
     *
     * The fourth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case APRIL = 4;

    /**
     * ### May
     *
     * The fifth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case MAY = 5;

    /**
     * ### June
     *
     * The sixth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case JUNE = 6;

    /**
     * ### July
     *
     * The seventh month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case JULY = 7;

    /**
     * ### August
     *
     * The eighth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case AUGUST = 8;

    /**
     * ### September
     *
     * The ninth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case SEPTEMBER = 9;

    /**
     * ### October
     *
     * The tenth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case OCTOBER = 10;

    /**
     * ### November
     *
     * The eleventh month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case NOVEMBER = 11;

    /**
     * ### December
     *
     * The twelfth month of the Gregorian calendar year.
     * @since 1.0.0
     */
    case DECEMBER = 12;

    /**
     * ### Returns the long name of the month
     * @since 1.0.0
     *
     * @return non-empty-string The long name of the month.
     */
    public function longName ():string {

        return match ($this) {
            self::JANUARY => 'January',
            self::FEBRUARY => 'February',
            self::MARCH => 'March',
            self::APRIL => 'April',
            self::MAY => 'May',
            self::JUNE => 'June',
            self::JULY => 'July',
            self::AUGUST => 'August',
            self::SEPTEMBER => 'September',
            self::OCTOBER => 'October',
            self::NOVEMBER => 'November',
            self::DECEMBER => 'December'
        };

    }

    /**
     * ### Returns the short name of the month
     * @since 1.0.0
     *
     * @return non-empty-string The short name of the month.
     */
    public function shortName ():string {

        return match ($this) {
            self::JANUARY => 'Jan',
            self::FEBRUARY => 'Feb',
            self::MARCH => 'Mar',
            self::APRIL => 'Apr',
            self::MAY => 'May',
            self::JUNE => 'Jun',
            self::JULY => 'Jul',
            self::AUGUST => 'Aug',
            self::SEPTEMBER => 'Sep',
            self::OCTOBER => 'Oct',
            self::NOVEMBER => 'Nov',
            self::DECEMBER => 'Dec'
        };

    }

}