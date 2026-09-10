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

namespace FireHub\Core\Meta\Enum\Date\Format;

/**
 * ### Defines day format tokens
 *
 * The Day enum defines the supported format tokens for representing the day of the month or day of the week.
 *
 * Each case corresponds to a native PHP date and time format character and represents a specific day representation,
 * such as numeric, zero-padded numeric, abbreviated textual, or full textual output.
 * @since 1.0.0
 */
enum Day:string implements Token {

    /**
     * ### Day of the month without leading zeros
     *
     * A numeric representation of the day of the month without leading zeros.
     *
     * <code>
     * 1-31
     * </code>
     *
     * @since 1.0.0
     */
    case NUMBER = 'j';

    /**
     * ### Day of the month with leading zeros
     *
     * A two-digit numeric representation of the day of the month.
     *
     * <code>
     * 01-31
     * </code>
     *
     * @since 1.0.0
     */
    case NUMBER_PADDED = 'd';

    /**
     * ### Short textual day name
     *
     * A three-letter textual representation of the day of the week.
     *
     * <code>
     * Mon-Sun
     * </code>
     *
     * @since 1.0.0
     */
    case TEXT_SHORT = 'D';

    /**
     * ### Full textual day name
     *
     * The full textual representation of the day of the week.
     *
     * <code>
     * Monday-Sunday
     * </code>
     *
     * @since 1.0.0
     */
    case TEXT_LONG = 'l';

    /**
     * ### Day of the year
     *
     * A numeric representation of the day of the year, starting at zero.
     *
     * <code>
     * 0-365
     * </code>
     *
     * @since 1.0.0
     */
    case DAY_OF_YEAR = 'z';

    /**
     * ### Day of the week
     *
     * A numeric representation of the day of the week, with Sunday represented by zero.
     *
     * <code>
     * 0-6
     * </code>
     *
     * @since 1.0.0
     */
    case DAY_OF_WEEK = 'w';

    /**
     * ### ISO day of the week
     *
     * A numeric representation of the ISO-8601 day of the week, with Monday represented by one and Sunday by seven.
     *
     * <code>
     * 1-7
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_DAY_OF_WEEK = 'N';

    /**
     * ### English ordinal suffix
     *
     * The English ordinal suffix for the day of the month.
     *
     * <code>
     * st, nd, rd, th
     * </code>
     *
     * @since 1.0.0
     */
    case ORDINAL_SUFFIX = 'S';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}