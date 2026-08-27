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
 * ### Defines week format tokens
 *
 * The Week enum defines the supported format tokens for representing calendar weeks.
 *
 * Each case corresponds to a native PHP date and time format character.
 * @since 1.0.0
 */
enum Week:string implements Token {

    /**
     * ### ISO week number
     *
     * The ISO-8601 week number of the year.
     *
     * <code>
     * 01-53
     * </code>
     *
     * @since 1.0.0
     */
    case ISO_NUMBER = 'W';

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    public function value ():string {

        return $this->value;

    }

}