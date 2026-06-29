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

namespace FireHub\Core\Foundation\Constant\Numeric;

use FireHub\Core\Boundary\Lifecycle\NonInstantiable;

use const PHP_INT_MAX;
use const PHP_INT_MIN;
use const PHP_INT_SIZE;

/**
 * ### Represents integer boundaries and architecture-level constraints of the current PHP runtime
 *
 * These values define the absolute limits of integer representation, including minimum and maximum supported integer
 * values and the underlying platform integer size (32-bit or 64-bit).
 *
 * The values are derived from the PHP runtime environment and are immutable system-level invariants used across the
 * FireHub Core, Runtime, and Foundation layers to ensure consistent numeric behavior.
 * @since 1.0.0
 */
final class IntegerLimits {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### The minimum integer value supported by the current PHP build architecture
     *
     * Depends on system architecture (32-bit vs. 64-bit).
     * @since 1.0.0
     */
    public const int MIN = PHP_INT_MIN;

    /**
     * ### The maximum integer value supported by the current PHP build architecture
     *
     * Depends on system architecture (32-bit vs. 64-bit).
     * @since 1.0.0
     */
    public const int MAX = PHP_INT_MAX;

    /**
     * ### The size of an integer in bytes by current PHP build architecture
     *
     * Depends on system architecture (32-bit vs. 64-bit).
     * @since 1.0.0
     */
    public const int SIZE = PHP_INT_SIZE;

}