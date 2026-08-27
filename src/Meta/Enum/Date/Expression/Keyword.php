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
 * ### Defines temporal keywords
 *
 * The Keyword enum defines keywords that identify specific or relative date and time within a temporal expression.
 *
 * These values are commonly used when parsing human-readable date and time expressions.
 * @since 1.0.0
 */
enum Keyword:string {

    /**
     * ### Now
     *
     * The current date and time.
     * @since 1.0.0
     */
    case NOW = 'now';

}