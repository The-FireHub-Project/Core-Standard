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

use const PHP_EOL;
use const PHP_OS;
use const PHP_OS_FAMILY;
use const PHP_SAPI;
use const PHP_SHLIB_SUFFIX;
use const PHP_FD_SETSIZE;

/**
 * ### Represents PHP runtime platform and execution environment information
 *
 * Defines the operating system target, OS family abstraction, server API (SAPI), and platform-specific behavior such
 * as end-of-line character.
 *
 * These values describe the execution context in which the PHP runtime operates and are essential for platform-aware
 * logic and cross-system compatibility.
 * @since 1.0.0
 */
final class PlatformInfo {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Operating system PHP was built for
     * @since 1.0.0
     */
    public const string OS = PHP_OS;

    /**
     * ### Operating system family (Linux, Windows, Darwin, BSD, Solaris, Unknown)
     * @since 1.0.0
     */
    public const string OS_FAMILY = PHP_OS_FAMILY;

    /**
     * ### Server API used by this PHP runtime (CLI, FPM, Apache, etc.)
     * @since 1.0.0
     */
    public const string SAPI = PHP_SAPI;

    /**
     * ### Platform-specific end-of-line character
     * @since 1.0.0
     */
    public const string EOL = PHP_EOL;

    /**
     * ### Shared library file extension suffix for the current build platform
     *
     * Defines the file extension used for dynamically loaded PHP extensions (e.g. "so" on Unix-like systems, "dll"
     * on Windows).
     * @since 1.0.0
     */
    public const string SH_LIB_SUFFIX = PHP_SHLIB_SUFFIX;

    /**
     * ### Maximum number of file descriptors available for select() system calls
     *
     * Defines the upper limit of file descriptors that can be monitored simultaneously using the select() system
     * call on this PHP build.
     * @since 1.0.0
     */
    public const int FD_SET_SIZE = PHP_FD_SETSIZE;

}