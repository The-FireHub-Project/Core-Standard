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

namespace FireHub\Core\Meta\Enum\FileSystem;

/**
 * ### Search flags options
 *
 * Defines options for path pattern matching.
 * @since 1.0.0
 */
enum PathSearchFlag {

    /**
     * ### Stop if read errors
     *
     * Stops searching when unreadable directories are encountered.
     * @since 1.0.0
     */
    case ERROR;

    /**
     * ### Mark directories
     *
     * Adds a directory separator to returned directories.
     * @since 1.0.0
     */
    case MARK;

    /**
     * ### Disable sorting
     *
     * Returns entries in filesystem order.
     * @since 1.0.0
     */
    case NO_SORT;

    /**
     * ### Search only directories
     *
     * Returns only directory entries.
     * @since 1.0.0
     */
    case ONLY_DIRECTORY;

}