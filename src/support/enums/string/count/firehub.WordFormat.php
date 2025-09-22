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
 * ### Word count format for strings
 * @since 1.0.0
 */
enum WordFormat:int {

    /**
     * ### Number of words found
     * @since 1.0.0
     */
    case WORDS = 0;

    /**
     * ### Array containing all the words found inside the string
     * @since 1.0.0
     */
    case ARR_WORDS = 1;

    /**
     * ### Array where the key is the numeric position of the word inside the string and the value is the actual word itself
     * @since 1.0.0
     */
    case ASSOC_ARR_WORDS = 2;

}