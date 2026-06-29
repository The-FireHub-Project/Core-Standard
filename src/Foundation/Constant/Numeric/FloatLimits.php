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

use const INF;
use const NAN;
use const PHP_FLOAT_DIG;
use const PHP_FLOAT_EPSILON;
use const PHP_FLOAT_MAX;
use const PHP_FLOAT_MIN;

/**
 * ### Represents floating-point limits and IEEE-754 behavior constants for the current PHP runtime environment
 *
 * These values define the precision, boundaries, and special numeric states used by floating-point arithmetic within
 * the FireHub framework.
 * @since 1.0.0
 */
final class FloatLimits {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Positive infinity value in IEEE-754 floating-point representation
     *
     * Represents values greater than the maximum finite float.
     * @since 1.0.0
     */
    public const float INF = INF;

    /**
     * Not-a-Number (NaN) special floating-point value
     *
     * Represents undefined or unrepresentable numeric results (e.g., 0/0).
     * @since 1.0.0
     */
    public const float NAN = NAN;

    /**
     * Number of decimal digits that can be reliably represented in a float
     *
     * Defines floating-point precision for the current PHP runtime.
     * @since 1.0.0
     */
    public const float DIG = PHP_FLOAT_DIG;

    /**
     * Smallest representable difference between two distinct floating-point numbers
     *
     * Used for safe floating-point comparisons instead of strict equality
     * @since 1.0.0
     */
    public const float EPSILON = PHP_FLOAT_EPSILON;

    /**
     * Largest finite floating-point value supported by the PHP runtime
     *
     * Values larger than this are represented as INF.
     * @since 1.0.0
     */
    public const float MAX = PHP_FLOAT_MAX;

    /**
     * Smallest positive normalized floating-point value supported by PHP
     *
     * Values smaller than this may underflow toward zero.
     * @since 1.0.0
     */
    public const float MIN = PHP_FLOAT_MIN;

}