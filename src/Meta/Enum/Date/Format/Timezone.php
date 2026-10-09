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
 * ### Defines timezone format tokens
 *
 * The Timezone enum defines the supported format tokens for representing timezone information and UTC offsets.
 *
 * Each case corresponds to a native PHP date and time format character.
 * @since 1.0.0
 */
enum Timezone:string implements Token {

    /**
     * ### Daylight Saving Time indicator
     *
     * Indicates whether daylight saving time is currently active.
     *
     * <code>
     * 1 or 0
     * </code>
     *
     * @since 1.0.0
     */
    case DAYLIGHT_SAVING = 'I';

    /**
     * ### UTC offset in hours
     *
     * The difference from Coordinated Universal Time (UTC) in hours.
     *
     * <code>
     * +0200
     * </code>
     *
     * @since 1.0.0
     */
    case OFFSET = 'O';

    /**
     * ### UTC offset with colon
     *
     * The difference from Coordinated Universal Time (UTC) with a colon separating hours and minutes.
     *
     * <code>
     * +02:00
     * </code>
     *
     * @since 1.0.0
     */
    case OFFSET_COLON = 'P';

    /**
     * ### Timezone abbreviation
     *
     * The abbreviated timezone name.
     *
     * <code>
     * CET
     * </code>
     *
     * @since 1.0.0
     */
    case ABBREVIATION = 'T';

    /**
     * ### Timezone offset in seconds
     *
     * The total timezone offset from UTC, expressed in seconds.
     *
     * <code>
     * 7200
     * </code>
     *
     * @since 1.0.0
     */
    case OFFSET_SECONDS = 'Z';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}