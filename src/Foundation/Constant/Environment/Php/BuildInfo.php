<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.4
 * @package Core
 */

namespace FireHub\Core\Foundation\Constant\Environment\Php;

use FireHub\Core\Boundary\Lifecycle\NonInstantiable;

use const PHP_BINARY;
use const PHP_BINDIR;
use const PHP_PREFIX;
use const PHP_SBINDIR;
use const PHP_SYSCONFDIR;

/**
 * ### Represents PHP build and installation directory metadata
 *
 * Includes binary location, installation prefixes, and system configuration paths used by the PHP runtime environment.
 * @since 1.0.0
 */
final class BuildInfo {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Path to the PHP binary executable
     * @since 1.0.0
     */
    public const string BINARY_PATH = PHP_BINARY;

    /**
     * ### Directory where PHP binaries are installed
     * @since 1.0.0
     */
    public const string BINARY_DIR = PHP_BINDIR;

    /**
     * ### Directory for system-level PHP binaries (sbin)
     *
     * Contains privileged or system administration executables installed with PHP.
     * @since 1.0.0
     */
    public const string SBIN_DIR = PHP_SBINDIR;

    /**
     * ### Base installation prefix of PHP
     * @since 1.0.0
     */
    public const string PREFIX = PHP_PREFIX;

    /**
     * ### System configuration directory
     * @since 1.0.0
     */
    public const string SYS_CONFIG_DIR = PHP_SYSCONFDIR;

}