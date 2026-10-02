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

namespace FireHub\Core\Meta\Enum\Number;

/**
 * ### Defines predefined numeric formatting conventions
 *
 * Provides commonly used numeric formatting conventions for interpreting decimal values.
 *
 * Each case defines the decimal and a thousand separators associated with the convention.
 * @since 1.0.0
 */
enum Format {

    /**
     * ### Defines the international dot-decimal convention
     *
     * Uses a dot as the decimal separator and a comma as the thousand separator.
     * @since 1.0.0
     */
    case DOT;

    /**
     * ### Defines the comma-decimal convention
     *
     * Uses a comma as the decimal separator and a dot as the thousand separator.
     * @since 1.0.0
     */
    case COMMA;

    /**
     * ### Defines the SI-style convention
     *
     * Uses a dot as the decimal separator and a space as the thousand separator.
     * @since 1.0.0
     */
    case SI;

    /**
     * ### Returns the decimal separator
     * @since 1.0.0
     *
     * @return string The decimal separator.
     */
    public function decimalSeparator ():string {

        return match ($this) {
            self::DOT, self::SI => '.',
            self::COMMA => ',',
        };

    }

    /**
     * ### Returns a thousand separator
     * @since 1.0.0
     *
     * @return string The thousand separator.
     */
    public function thousandsSeparator ():string {

        return match ($this) {
            self::DOT => ',',
            self::COMMA => '.',
            self::SI => ' ',
        };

    }

}