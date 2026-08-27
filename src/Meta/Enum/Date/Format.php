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

use FireHub\Core\Meta\Enum\Date\Format\Token;

/**
 * ### Provides predefined date and time formatting standards
 *
 * The TemporalFormat enum defines commonly used PHP date and time format patterns for parsing and formatting temporal
 * values throughout the FireHub ecosystem.
 *
 * It provides reusable predefined formats for date, time, and combined date-time values while allowing temporal value
 * objects to maintain support for arbitrary custom PHP format strings.
 * @since 1.0.0
 */
enum Format:string implements Token {

    /**
     * ### ISO 8601 calendar date
     *
     * <code>
     * 2000-12-31
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_DATE = 'Y-m-d';

    /**
     * ### ISO time
     *
     * <code>
     * 23:59:50
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_TIME = 'H:i:s';

    /**
     * ### ISO time with microseconds
     *
     * <code>
     * 23:59:50.000000
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_TIME_MICROSECONDS = 'H:i:s.u';

    /**
     * ### ISO date and time
     *
     * <code>
     * 2000-12-31 23:59:50
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_DATE_TIME = 'Y-m-d H:i:s';

    /**
     * ### ISO date and time with microseconds
     *
     * <code>
     * 2000-12-31 23:59:50.000000
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_DATE_TIME_MICROSECONDS = 'Y-m-d H:i:s.u';

    /**
     * ### ATOM date and time
     *
     * <code>
     * 2000-12-31T23:59:50+01:00
     * </code>
     *
     * @since 1.0.0
     */
    case ATOM = 'Y-m-d\TH:i:sP';

    /**
     * ### ATOM date and time with milliseconds
     *
     * <code>
     * 2000-12-31T23:59:50.000+01:00
     * </code>
     *
     * @since 1.0.0
     */
    case ATOM_EXTENDED = 'Y-m-d\TH:i:s.vP';

    /**
     * ### ATOM date and time with microseconds
     *
     * <code>
     * 2000-12-31T23:59:50.000000+01:00
     * </code>
     *
     * @since 1.0.0
     */
    case ATOM_MICROSECONDS = 'Y-m-d\TH:i:s.uP';

    /**
     * ### HTTP cookie date and time
     *
     * <code>
     * Sunday, 31-Dec-2000 23:59:50 CET
     * </code>
     *
     * @since 1.0.0
     */
    case COOKIE = 'l, d-M-Y H:i:s T';

    /**
     * ### ISO 8601 date and time with numeric timezone offset
     *
     * <code>
     * 2000-12-31T23:59:50+0100
     * </code>
     *
     * @since 1.0.0
     */
    case ISO8601 = 'Y-m-d\TH:i:sO';

    /**
     * ### ISO 8601 expanded date and time
     *
     * <code>
     * +2000-12-31T23:59:50+01:00
     * </code>
     *
     * @since 1.0.0
     */
    case ISO8601_EXPANDED = 'X-m-d\TH:i:sP';

    /**
     * ### RFC 822 date and time
     *
     * <code>
     * Sun, 31 Dec 00 23:59:50 +0100
     * </code>
     *
     * @since 1.0.0
     */
    case RFC822 = 'D, d M y H:i:s O';

    /**
     * ### RFC 850 date and time
     *
     * <code>
     * Sunday, 31-Dec-00 23:59:50 CET
     * </code>
     *
     * @since 1.0.0
     */
    case RFC850 = 'l, d-M-y H:i:s T';

    /**
     * ### RFC 7231 HTTP date and time
     *
     * <code>
     * Sun, 31 Dec 2000 23:59:50 GMT
     * </code>
     *
     * @since 1.0.0
     */
    case RFC7231 = 'D, d M Y H:i:s \G\M\T';

    /**
     * ### RSS date and time
     *
     * <code>
     * Sun, 31 Dec 2000 23:59:50 +0100
     * </code>
     *
     * @since 1.0.0
     */
    case RSS = 'D, d M Y H:i:s O';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}