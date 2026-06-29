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

use const DEBUG_BACKTRACE_IGNORE_ARGS;
use const DEBUG_BACKTRACE_PROVIDE_OBJECT;
use const ZEND_DEBUG_BUILD;
use const ZEND_THREAD_SAFE;

/**
 * ### Represents PHP runtime execution capabilities and debug behavior flags
 *
 * Defines whether the PHP runtime is thread-safe, compiled in debug mode, and how debugging features such as
 * backtrace behavior are handled.
 *
 * These constants describe execution capabilities of the PHP engine and influence runtime behavior, concurrency
 * model, and debugging output.
 * @since 1.0.0
 */
final class RuntimeCapabilities {

    /**
     * ### Prevent instantiation of this class
     * @since 1.0.0
     */
    use NonInstantiable;

    /**
     * ### Indicates whether PHP is compiled with Zend thread safety enabled
     * @since 1.0.0
     */
    public const bool THREAD_SAFE = ZEND_THREAD_SAFE;

    /**
     * ### Indicates whether PHP is a debug build
     * @since 1.0.0
     */
    public const bool DEBUG_BUILD = ZEND_DEBUG_BUILD;

    /**
     * ### Includes object context in debug_backtrace output
     * @since 1.0.0
     */
    public const int BACKTRACE_PROVIDE_OBJECT = DEBUG_BACKTRACE_PROVIDE_OBJECT;

    /**
     * ### Omits function arguments from debug_backtrace output
     * @since 1.0.0
     */
    public const int BACKTRACE_IGNORE_ARGS = DEBUG_BACKTRACE_IGNORE_ARGS;

}