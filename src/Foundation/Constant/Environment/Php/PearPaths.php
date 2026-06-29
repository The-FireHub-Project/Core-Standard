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

use const PEAR_EXTENSION_DIR;
use const PEAR_INSTALL_DIR;

/**
 * ### Represents legacy PEAR installation and extension directories
 *
 * These values are provided for compatibility with legacy PHP ecosystems and are not part of the modern FireHub
 * runtime design.
 * @since 1.0.0
 */
final class PearPaths {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### PEAR installation directory
     * @since 1.0.0
     */
    public const string INSTALL_DIR = PEAR_INSTALL_DIR;

    /**
     * ### PEAR extension directory
     * @since 1.0.0
     */
    public const string EXTENSION_DIR = PEAR_EXTENSION_DIR;

}