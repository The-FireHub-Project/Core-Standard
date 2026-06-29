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

use const PHP_EXTENSION_DIR;
use const PHP_LIBDIR;

/**
 * ### Represents PHP extension and library directory locations
 *
 * Defines where PHP extensions, shared libraries, and runtime components are installed within the system.
 * @since 1.0.0
 */
final class ExtensionPaths {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Directory where PHP extensions are stored
     * @since 1.0.0
     */
    public const string EXTENSIONS = PHP_EXTENSION_DIR;

    /**
     * ### Directory for shared libraries
     * @since 1.0.0
     */
    public const string LIBRARIES = PHP_LIBDIR;

}