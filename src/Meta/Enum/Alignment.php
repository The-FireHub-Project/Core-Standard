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
 * ### Content Alignment
 *
 * Defines how content should be aligned within the available space.
 *
 * This enum represents the available alignment modes for text, output formatting, user interfaces, and similar
 * presentation-related operations.
 * @since 1.0.0
 */
enum Alignment {

    /**
     * ### Left alignment
     * @since 1.0.0
     */
    case LEFT;

    /**
     * ### Center alignment
     * @since 1.0.0
     */
    case CENTER;

    /**
     * ### Right alignment
     * @since 1.0.0
     */
    case RIGHT;

    /**
     * ### Justified alignment
     * @since 1.0.0
     */
    case JUSTIFY;

}