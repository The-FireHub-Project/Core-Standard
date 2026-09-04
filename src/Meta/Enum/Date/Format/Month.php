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
 * ### Defines month format tokens
 *
 * The Month enum defines the supported format tokens for representing the month and its properties.
 *
 * Each case corresponds to a native PHP date and time format character.
 * @since 1.0.0
 */
enum Month:string implements Token {

    /**
     * ### Full textual month name
     *
     * The full textual representation of the month.
     *
     * <code>
     * January-December
     * </code>
     *
     * @since 1.0.0
     */
    case TEXT_LONG = 'F';

    /**
     * ### Short textual month name
     *
     * A three-letter textual representation of the month.
     *
     * <code>
     * Jan-Dec
     * </code>
     *
     * @since 1.0.0
     */
    case TEXT_SHORT = 'M';

    /**
     * ### Month number with leading zero
     *
     * A two-digit numeric representation of the month.
     *
     * <code>
     * 01-12
     * </code>
     *
     * @since 1.0.0
     */
    case NUMBER_PADDED = 'm';

    /**
     * ### Month number without leading zero
     *
     * A numeric representation of the month without leading zeros.
     *
     * <code>
     * 1-12
     * </code>
     *
     * @since 1.0.0
     */
    case NUMBER = 'n';

    /**
     * ### Number of days in the month
     *
     * The number of days in the month is represented by the current date.
     *
     * <code>
     * 28-31
     * </code>
     *
     * @since 1.0.0
     */
    case DAYS_IN_MONTH = 't';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}