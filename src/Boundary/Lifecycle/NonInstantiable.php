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

namespace FireHub\Core\Boundary\Lifecycle;

/**
 * ### Prevents instantiation of a class
 *
 * This trait enforces a static-only usage model by disabling object creation. It is intended for classes that act
 * as constant containers, static utility holders, or low-level proxy facades where instantiation has no semantic
 * meaning.
 *
 * By using this trait, the class becomes a pure namespace-like structure, ensuring it cannot be instantiated at
 * runtime.
 *
 * This helps enforce architectural boundaries in the FireHub Core by clearly distinguishing static contracts from
 * runtime objects.
 * @since 1.0.0
 */
trait NonInstantiable {

    /**
     * ### Blocks object instantiation
     *
     * Prevents creation of instances from outside the class context.
     * @since 1.0.0
     *
     * @return void
     */
    private function __construct() {}
}