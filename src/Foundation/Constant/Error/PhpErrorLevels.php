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

namespace FireHub\Core\Foundation\Constant\Error;

use FireHub\Core\Boundary\Lifecycle\NonInstantiable;

use const E_ALL;
use const E_COMPILE_ERROR;
use const E_COMPILE_WARNING;
use const E_CORE_ERROR;
use const E_CORE_WARNING;
use const E_DEPRECATED;
use const E_ERROR;
use const E_NOTICE;
use const E_PARSE;
use const E_RECOVERABLE_ERROR;
use const E_USER_DEPRECATED;
use const E_USER_NOTICE;
use const E_USER_WARNING;
use const E_WARNING;

/**
 * ### Represents PHP error reporting severity levels
 *
 * Defines all native PHP error constants used for runtime error reporting, including system errors, user-generated
 * errors, warnings, notices, and deprecation signals.
 *
 * These values are used by the PHP engine to classify runtime issues and control error reporting behavior via
 * error_reporting().
 * @since 1.0.0
 */
final class PhpErrorLevels {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Fatal runtime error that halts script execution
     * @since 1.0.0
     */
    public const int ERROR = E_ERROR;

    /**
     * ### Runtime warning (non-fatal error)
     * @since 1.0.0
     */
    public const int WARNING = E_WARNING;

    /**
     * ### Parse-time error in PHP code compilation
     * @since 1.0.0
     */
    public const int PARSE = E_PARSE;

    /**
     * ### Runtime notice (minor issue, non-fatal)
     * @since 1.0.0
     */
    public const int NOTICE = E_NOTICE;

    /**
     * ### Core engine fatal error
     * @since 1.0.0
     */
    public const int CORE_ERROR = E_CORE_ERROR;

    /**
     * ### Core engine warning
     * @since 1.0.0
     */
    public const int CORE_WARNING = E_CORE_WARNING;

    /**
     * ### Compile-time fatal error
     * @since 1.0.0
     */
    public const int COMPILE_ERROR = E_COMPILE_ERROR;

    /**
     * ### Compile-time warning
     * @since 1.0.0
     */
    public const int COMPILE_WARNING = E_COMPILE_WARNING;

    /**
     * ### User-generated warning
     * @since 1.0.0
     */
    public const int USER_WARNING = E_USER_WARNING;

    /**
     * ### User-generated notice
     * @since 1.0.0
     */
    public const int USER_NOTICE = E_USER_NOTICE;

    /**
     * ### Recoverable fatal error (can be caught)
     * @since 1.0.0
     */
    public const int RECOVERABLE_ERROR = E_RECOVERABLE_ERROR;

    /**
     * ### Deprecated functionality warning
     * @since 1.0.0
     */
    public const int DEPRECATED = E_DEPRECATED;

    /**
     * ### User-generated deprecation warning
     * @since 1.0.0
     */
    public const int USER_DEPRECATED = E_USER_DEPRECATED;

    /**
     * ### All error levels combined
     * @since 1.0.0
     */
    public const int ALL = E_ALL;

}