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

use const PHP_DATADIR;
use const PHP_LOCALSTATEDIR;

/**
 * ### PHP runtime system filesystem boundary definition
 *
 * Encapsulates all filesystem paths exposed by the PHP runtime for system-level use, including extensions,
 * libraries, and internal data directories.
 * @since 1.0.0
 */
final class SystemPaths {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Local state directory used by PHP runtime
     * @since 1.0.0
     */
    public const string LOCAL_STATE = PHP_LOCALSTATEDIR;

    /**
     * ### Data directory used by PHP runtime
     * @since 1.0.0
     */
    public const string DATA = PHP_DATADIR;

}