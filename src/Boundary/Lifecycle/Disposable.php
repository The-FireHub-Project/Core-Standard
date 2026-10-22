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
 * ### Defines deterministic resource disposal
 *
 * Establishes a contract for objects that explicitly release resources acquired during their lifetime.
 *
 * Implementations may release database connections, file handles, network connections, or other resources requiring
 * deterministic cleanup.
 *
 * Disposal must be idempotent. Repeated calls must not release resources more than once or invalidate an already
 * completed disposal operation.
 *
 * The contract does not define when disposal occurs or which component owns the disposable instance. These
 * responsibilities belong to the lifecycle manager responsible for the instance.
 * @since 1.0.0
 */
interface Disposable {

    /**
     * ### Releases resources owned by the instance
     *
     * Performs deterministic cleanup of resources acquired by the instance.
     *
     * Implementations must safely handle repeated disposal attempts.
     *
     * After successful disposal, the instance should no longer perform operations requiring its released resources.
     * @since 1.0.0
     *
     * @return void
     */
    public function dispose ():void;

}