<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @php-version 8.1
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Enums\String\Count;

/**
 * ### Character count mode for strings
 * @since 1.0.0
 */
enum CharacterMode:int {

    /**
     * ### Array with the byte-value as key and the frequency of every byte as value
     * @since 1.0.0
     */
    case ARR_ALL = 0;

    /**
     * ### Array with the byte-value as key and the frequency of every byte as value where frequency greater than zero
     * @since 1.0.0
     */
    case ARR_POSITIVE = 1;

    /**
     * ### Array with the byte-value as key and the frequency of every byte as value where frequency equal to zero
     * @since 1.0.0
     */
    case ARR_ZERO = 2;

    /**
     * ### String containing all unique characters is returned
     * @since 1.0.0
     */
    case STR_UNIQUE = 3;

    /**
     * ### String containing all unused characters is returned
     * @since 1.0.0
     */
    case STR_UNUSED = 4;

}