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
 * ### Defines a kernel bootstrapper
 *
 * Establishes the contract for initializing components during the kernel boot process.
 *
 * Bootstrappers are executed in their registration order and must complete successfully before
 * subsequent bootstrappers are executed.
 *
 * This contract does not prescribe how components are initialized or managed internally.
 * @since 1.0.0
 */
interface Bootstrapper {

    /**
     * ### Bootstraps a component
     *
     * Initializes the component and prepares it for application execution.
     * @since 1.0.0
     *
     * @return void
     */
    public function bootstrap ():void;

}