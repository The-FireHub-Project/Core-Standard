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

namespace FireHub\Core\Meta\Enum;

/**
 * ### Sorting order enum
 *
 * Represents the direction in which items should be ordered.
 *
 * Used in sorting functions to specify ascending (ASC) or descending (DESC) order.
 *
 * Provides a convenient method to reverse the current order.
 * @since 1.0.0
 */
enum Order:string {

    /**
     * ### Ascending order
     *
     * Represents sorting in ascending order (smallest to largest).<br>
     * Used in sorting functions to specify that items should be ordered from lowest to highest.
     * @since 1.0.0
     */
    case ASC = 'ASC';

    /**
     * ### Descending order
     *
     * Represents sorting in descending order (largest to smallest).<br>
     * Used in sorting functions to specify that items should be ordered from highest to lowest.
     * @since 1.0.0
     */
    case DESC = 'DESC';

}