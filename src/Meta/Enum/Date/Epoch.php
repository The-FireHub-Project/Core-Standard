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
 * ### Defines supported temporal epochs
 *
 * The Epoch enum defines the reference points from which timestamp values are measured.
 *
 * Each epoch represents a fixed point in time from which elapsed seconds and fractional seconds can be calculated.
 * @since 1.0.0
 */
enum Epoch:string {

    /**
     * ### Unix epoch
     *
     * Unix Epoch used in POSIX time, used by Unix and Unix-like systems (Linux, macOS, Android), and programming
     * languages: most C/C++ implementations, [32] Java, JavaScript, Perl, PHP, Python, Ruby, Tcl, ActionScript.
     * Also used by Precision Time Protocol.
     *
     * <code>
     * 1970-01-01T00:00:00+00:00
     * </code>
     *
     * @since 1.0.0
     */
    case UNIX = '1970-01-01T00:00:00+00:00';

    /**
     * ### GPS epoch
     *
     * The GPS epoch is the reference point used by the Global Positioning System (GPS) timescale.
     * It begins at 1980-01-06T00:00:00+00:00 and is used as the starting point for measuring GPS time in seconds and
     * fractional seconds.
     *
     * <code>
     * 1980-01-06T00:00:00+00:00
     * </code>
     *
     * @since 1.0.0
     */
    case GPS = '1980-01-06T00:00:00+00:00';

    /**
     * ### NTP epoch
     *
     * The NTP epoch is the reference point used by the Network Time Protocol (NTP) timescale.
     * It begins at 1900-01-01T00:00:00+00:00 and is used as the starting point for measuring NTP time in seconds and
     * fractional seconds.
     *
     * <code>
     * 1900-01-01T00:00:00+00:00
     * </code>
     *
     * @since 1.0.0
     */
    case NTP = '1900-01-01T00:00:00+00:00';

    /**
     * ### Windows NT epoch
     *
     * The Windows NT epoch is the reference point used by the Windows NT family of operating systems.
     * It begins at 1601-01-01T00:00:00+00:00 and is used as the starting point for measuring Windows NT time in seconds
     * and fractional seconds.
     *
     * <code>
     * 1601-01-01T00:00:00+00:00
     * </code>
     *
     * @since 1.0.0
     */
    case WINDOWS_NT = '1601-01-01T00:00:00+00:00';

    /**
     * ### Excel epoch
     *
     * The Excel epoch is the reference point used by Microsoft Excel's serial date system.
     * It begins at 1899-12-30T00:00:00+00:00 and is used as the starting point for measuring Excel serial date and
     * time values.
     *
     * <code>
     * 1899-12-30T00:00:00+00:00
     * </code>
     *
     * @since 1.0.0
     */
    case EXCEL = '1899-12-30T00:00:00+00:00';

    /**
     * ### Y2K epoch
     *
     * The Y2K epoch is the reference point marking the beginning of the year 2000.
     * It begins at 2000-01-01T00:00:00+00:00 and can be used as an alternative starting point for measuring time.
     *
     * <code>
     * 2000-01-01T00:00:00+00:00
     * </code>
     *
     * @since 1.0.0
     */
    case Y2K = '2000-01-01T00:00:00+00:00';

    /**
     * ### Returns the Unix epoch offset in seconds
     * @since 1.0.0
     *
     * @return int Unix epoch offset in seconds
     */
    public function unixOffset ():int {

        return match ($this) {
            self::UNIX => 0,
            self::GPS => 315964800,
            self::NTP => 2208988800,
            self::WINDOWS_NT => -11644473600,
            self::EXCEL => -2209161600,
            self::Y2K => 946684800,
        };

    }


}