<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Meta\Enum\Kernel;

/**
 * ### Defines kernel lifecycle states
 *
 * Represents the possible states of a kernel throughout its initialization, execution readiness,
 * and termination lifecycle.
 * @since 1.0.0
 */
enum State {

    /**
     * ### Created
     *
     * The kernel has been instantiated but has not started initialization.
     * @since 1.0.0
     */
    case CREATED;

    /**
     * ### Booting
     *
     * The kernel is currently initializing its components and preparing for execution.
     * @since 1.0.0
     */
    case BOOTING;

    /**
     * ### Booted
     *
     * The kernel has successfully completed initialization and is ready for execution.
     * @since 1.0.0
     */
    case BOOTED;

    /**
     * ### Shutting down
     *
     * The kernel is currently terminating its managed components and releasing resources.
     * @since 1.0.0
     */
    case SHUTTING_DOWN;

    /**
     * ### Terminated
     *
     * The kernel has completed its shutdown process and is no longer operational.
     * @since 1.0.0
     */
    case TERMINATED;

    /**
     * ### Boot Failed
     *
     * The kernel failed to initialize its components and cannot continue its normal lifecycle.
     * @since 1.0.0
     */
    case BOOT_FAILED;

    /**
     * ### Shutdown Failed
     *
     * The kernel failed to terminate its managed components and cannot continue its normal lifecycle.
     * @since 1.0.0
     */
    case SHUTDOWN_FAILED;

}