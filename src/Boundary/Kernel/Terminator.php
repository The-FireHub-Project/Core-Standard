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

namespace FireHub\Core\Boundary\Kernel;

/**
 * ### Defines a kernel terminator
 *
 * Establishes the contract for terminating components and releasing resources during kernel shutdown.
 *
 * Terminators are executed in reverse registration order to support orderly resource cleanup.
 *
 * This contract is independent of the bootstrapper contract, allowing components to participate
 * in initialization, termination, or both lifecycle phases.
 * @since 1.0.0
 */
interface Terminator {

    /**
     * ### Terminates a component
     *
     * Performs component-specific cleanup and releases resources associated with the component.
     * @since 1.0.0
     *
     * @return void
     */
    public function terminate ():void;

}