<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Runtime;

use FireHub\Core\Boundary\Lifecycle\NonInstantiable;

/**
 * ### Defines a contract for FireHub runtime wrapper components
 *
 * Runtime wrappers provide a unified abstraction boundary for interacting with native PHP functionality,
 * including built-in functions, language features, and PHP extensions.
 *
 * Implementations must encapsulate direct PHP runtime interactions and expose them through a consistent
 * FireHub API instead of relying on scattered native calls throughout the ecosystem.
 *
 * @since 1.0.0
 */
abstract class NativeRuntime {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

}