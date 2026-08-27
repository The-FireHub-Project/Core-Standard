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
 * ### Defines date-related temporal keywords
 *
 * The DateKeyword enum defines keywords that identify a calendar date relative to the current date.
 *
 * These values are commonly used when parsing human-readable date and time expressions.
 * @since 1.0.0
 */
enum DateKeyword:string {

    /**
     * ### Yesterday
     *
     * The calendar day immediately preceding the current day.
     * @since 1.0.0
     */
    case YESTERDAY = 'yesterday';

    /**
     * ### Today
     *
     * The current calendar day.
     * @since 1.0.0
     */
    case TODAY = 'today';

    /**
     * ### Tomorrow
     *
     * The calendar day immediately follows the current day.
     * @since 1.0.0
     */
    case TOMORROW = 'tomorrow';

}