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
 * ### Defines ordinal positions
 *
 * The Ordinal enum defines ordinal positions from first through twelfth.
 *
 * Ordinal positions can be used to describe the position of a temporal occurrence within a larger temporal unit.
 * @since 1.0.0
 */
enum Ordinal:string {

    /**
     * ### First
     * @since 1.0.0
     */
    case FIRST = 'first';

    /**
     * ### Second
     * @since 1.0.0
     */
    case SECOND = 'second';

    /**
     * ### Third
     * @since 1.0.0
     */
    case THIRD = 'third';

    /**
     * ### Fourth
     * @since 1.0.0
     */
    case FOURTH = 'fourth';

    /**
     * ### Fifth
     * @since 1.0.0
     */
    case FIFTH = 'fifth';

    /**
     * ### Sixth
     * @since 1.0.0
     */
    case SIXTH = 'sixth';

    /**
     * ### Seventh
     * @since 1.0.0
     */
    case SEVENTH = 'seventh';

    /**
     * ### Eighth
     * @since 1.0.0
     */
    case EIGHTH = 'eighth';

    /**
     * ### Ninth
     * @since 1.0.0
     */
    case NINTH = 'ninth';

    /**
     * ### Tenth
     * @since 1.0.0
     */
    case TENTH = 'tenth';

    /**
     * ### Eleventh
     * @since 1.0.0
     */
    case ELEVENTH = 'eleventh';

    /**
     * ### Twelfth
     * @since 1.0.0
     */
    case TWELFTH = 'twelfth';

}