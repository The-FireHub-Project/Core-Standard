<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.3
 * @package Core
 */

namespace FireHub\Core\Foundation\Constant\Environment\Php;

use FireHub\Core\Boundary\Lifecycle\NonInstantiable;

use const PHP_CONFIG_FILE_PATH;
use const PHP_CONFIG_FILE_SCAN_DIR;

/**
 * ### Represents PHP configuration file locations and scan directories
 *
 * Defines where PHP loads its configuration files (php.ini and scan dirs) during runtime initialization.
 * @since 1.0.0
 */
final class ConfigPaths {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Full path to the loaded php.ini file
     * @since 1.0.0
     */
    public const string CONFIG_FILE = PHP_CONFIG_FILE_PATH;

    /**
     * ### Directory scanned for additional configuration files
     * @since 1.0.0
     */
    public const string CONFIG_SCAN = PHP_CONFIG_FILE_SCAN_DIR;

}