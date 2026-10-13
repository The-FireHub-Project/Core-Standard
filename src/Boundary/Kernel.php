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

namespace FireHub\Core\Boundary;

use FireHub\Core\Meta\Enum\Kernel\State;

/**
 * ### Defines the fundamental kernel lifecycle
 *
 * Establishes the contract for initializing, managing, and terminating a kernel.
 *
 * A kernel coordinates the lifecycle of a runtime component without prescribing its execution model,
 * application responsibilities, or underlying implementation.
 *
 * Implementations must maintain a consistent lifecycle state and ensure that initialization and termination
 * operations follow their defined state transition rules.
 *
 * This contract does not define request handling, command execution, or other transport-specific operations.
 * @since 1.0.0
 */
interface Kernel {

    /**
     * ### Boots the kernel
     *
     * Initializes the kernel and prepares its managed components for execution.
     *
     * Implementations must ensure that initialization follows the defined lifecycle transition rules.
     * If initialization fails, the kernel must not report a successfully initialized state.
     * @since 1.0.0
     *
     * @return void
     */
    public function boot ():void;

    /**
     * ### Shuts down the kernel
     *
     * Terminates the kernel lifecycle and releases resources managed by the kernel.
     *
     * Implementations must ensure that termination follows the defined lifecycle transition rules.
     * @since 1.0.0
     *
     * @return void
     */
    public function shutdown ():void;

    /**
     * ### Gets the current kernel state
     *
     * Returns the current lifecycle state of the kernel.
     * @since 1.0.0
     *
     * @return \FireHub\Core\Meta\Enum\Kernel\State Current kernel lifecycle state.
     */
    public function state ():State;

}