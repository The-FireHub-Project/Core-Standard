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
 * ### Side Selection
 *
 * Defines which side of a value or structure should be used when performing directional operations.
 *
 * This enum represents the available side selections for operations such as trimming, padding, slicing, and similar
 * left/right-oriented transformations.
 * @since 1.0.0
 */
enum Side {

    /**
     * ### Left side
     * @since 1.0.0
     */
    case LEFT;

    /**
     * ### Right side
     * @since 1.0.0
     */
    case RIGHT;

    /**
     * ### Both sides
     * @since 1.0.0
     */
    case BOTH;

}