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
 * ### Numeric base representation
 *
 * Defines supported numeral systems used to represent numeric values.
 *
 * Numeric bases describe how a number is represented using a set of digits. The value of each case corresponds to
 * the base radix.
 * @since 1.0.0
 */
enum Base:int {

    /**
     * ### Binary numeral system
     *
     * Base-2 numeral system using only digits 0 and 1.
     * @since 1.0.0
     */
    case BINARY = 2;

    /**
     * ### Octal numeral system
     *
     * Base-8 numeral system using digits from 0 to 7.
     * @since 1.0.0
     */
    case OCTAL = 8;

    /**
     * ### Decimal numeral system
     *
     * Base-10 numeral system using digits from 0 to 9.
     * @since 1.0.0
     */
    case DECIMAL = 10;

    /**
     * ### Hexadecimal numeral system
     *
     * Base-16 numeral system using digits from 0 to 9 and letters a-f.
     * @since 1.0.0
     */
    case HEXADECIMAL = 16;

}