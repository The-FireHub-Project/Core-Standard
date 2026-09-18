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
 * ### Defines year format tokens
 *
 * The Year enum defines the supported format tokens for representing calendar years and leap years.
 *
 * Each case corresponds to a native PHP date and time format character.
 * @since 1.0.0
 */
enum Year:string implements Token {

    /**
     * ### Two-digit year
     *
     * A two-digit numeric representation of the year.
     *
     * <code>
     * 00-99
     * </code>
     *
     * @since 1.0.0
     */
    case NUMBER_SHORT = 'y';

    /**
     * ### Four-digit year
     *
     * A four-digit numeric representation of the year.
     *
     * <code>
     * 0000-9999
     * </code>
     *
     * @since 1.0.0
     */
    case NUMBER_LONG = 'Y';

    /**
     * ### Leap year indicator
     *
     * Indicates whether the current year is a leap year.
     *
     * <code>
     * 1 or 0
     * </code>
     *
     * @since 1.0.0
     */
    case LEAP_YEAR = 'L';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}