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

use const DEFAULT_INCLUDE_PATH;
use const DIRECTORY_SEPARATOR;
use const PATH_SEPARATOR;
use const PHP_MAXPATHLEN;

/**
 * ### Represents filesystem path and directory separator constants of the PHP runtime
 *
 * These values define how the operating system handles file paths, include paths, and maximum path length constraints.
 * @since 1.0.0
 */
final class Paths {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Directory separator used by the operating system.
     * @since 1.0.0
     */
    public const string DIRECTORY_SEPARATOR = DIRECTORY_SEPARATOR;

    /**
     * ### Path list separator used in include path lists (OS dependent, e.g. ":" or ";")
     * @since 1.0.0
     */
    public const string PATH_SEPARATOR = PATH_SEPARATOR;

    /**
     * ### The default include path used by PHP runtime
     * @since 1.0.0
     */
    public const string DEFAULT_INCLUDE_PATH = DEFAULT_INCLUDE_PATH;

    /**
     * ### Maximum supported filesystem path length
     * @since 1.0.0
     */
    public const int MAX_PATH_LENGTH = PHP_MAXPATHLEN;

}