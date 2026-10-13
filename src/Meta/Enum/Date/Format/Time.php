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
 * ### Defines time format tokens
 *
 * The Time enum defines the supported format tokens for representing the time of day and its fractional components.
 *
 * Each case corresponds to a native PHP date and time format character.
 * @since 1.0.0
 */
enum Time:string implements Token {

    /**
     * ### Uppercase ante meridiem or post meridiem
     *
     * A textual representation indicating whether the time is before or after noon.
     *
     * <code>
     * AM or PM
     * </code>
     *
     * @since 1.0.0
     */
    case MERIDIEM_UPPER = 'A';

    /**
     * ### Lowercase ante meridiem or post meridiem
     *
     * A lowercase textual representation indicating whether the time is before or after noon.
     *
     * <code>
     * am or pm
     * </code>
     *
     * @since 1.0.0
     */
    case MERIDIEM_LOWER = 'a';

    /**
     * ### Swatch Internet Time
     *
     * The current time in Swatch Internet Time, represented as beats from 000 to 999.
     *
     * <code>
     * 000-999
     * </code>
     *
     * @since 1.0.0
     */
    case SWATCH_BEAT = 'B';

    /**
     * ### Hour in 12-hour format
     *
     * A numeric representation of the hour in a 12-hour format without leading zeros.
     *
     * <code>
     * 1-12
     * </code>
     *
     * @since 1.0.0
     */
    case HOUR_12 = 'g';

    /**
     * ### Hour in 24-hour format
     *
     * A numeric representation of the hour in a 24-hour format without leading zeros.
     *
     * <code>
     * 0-23
     * </code>
     *
     * @since 1.0.0
     */
    case HOUR_24 = 'G';

    /**
     * ### Hour in 12-hour format with leading zero
     *
     * A two-digit numeric representation of the hour in 12-hour format.
     *
     * <code>
     * 01-12
     * </code>
     *
     * @since 1.0.0
     */
    case HOUR_12_PADDED = 'h';

    /**
     * ### Hour in 24-hour format with leading zero
     *
     * A two-digit numeric representation of the hour in 24-hour format.
     *
     * <code>
     * 00-23
     * </code>
     *
     * @since 1.0.0
     */
    case HOUR_24_PADDED = 'H';

    /**
     * ### Minutes with leading zero
     *
     * A two-digit numeric representation of the minutes.
     *
     * <code>
     * 00-59
     * </code>
     *
     * @since 1.0.0
     */
    case MINUTE = 'i';

    /**
     * ### Seconds with leading zero
     *
     * A two-digit numeric representation of the seconds.
     *
     * <code>
     * 00-59
     * </code>
     *
     * @since 1.0.0
     */
    case SECOND = 's';

    /**
     * ### Milliseconds
     *
     * A three-digit numeric representation of milliseconds.
     *
     * <code>
     * 000-999
     * </code>
     *
     * @since 1.0.0
     */
    case MILLISECOND = 'v';

    /**
     * ### Microseconds
     *
     * A six-digit numeric representation of microseconds.
     *
     * <code>
     * 000000-999999
     * </code>
     *
     * @since 1.0.0
     */
    case MICROSECOND = 'u';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}