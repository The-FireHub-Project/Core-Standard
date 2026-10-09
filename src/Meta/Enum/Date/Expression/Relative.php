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

namespace FireHub\Core\Meta\Enum\Date\Expression;

/**
 * ### Defines relative temporal positions
 *
 * The Relative enum defines temporal positions relative to a reference date or time.
 *
 * These values can be used to describe a temporal unit as preceding, following, or coinciding with a reference
 * period.
 * @since 1.0.0
 */
enum Relative:string {

    /**
     * ### Next
     *
     * The temporal period immediately follows the reference period.
     * @since 1.0.0
     */
    case NEXT = 'next';

    /**
     * ### Last
     *
     * The immediately preceding temporal period.
     * @since 1.0.0
     */
    case LAST = 'last';

    /**
     * ### Previous
     *
     * The temporal period immediately preceding the reference period.
     * @since 1.0.0
     */
    case PREVIOUS = 'previous';

    /**
     * ### This
     *
     * The temporal period contains the reference point.
     * @since 1.0.0
     */
    case THIS = 'this';

}