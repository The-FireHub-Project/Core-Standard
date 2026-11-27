<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary\IO\Storage\Driver;

use FireHub\Core\Boundary\IO\Storage\Path;

/**
 * ### Movable storage driver
 *
 * Defines the capability of moving stored objects between logical paths within the same storage driver.
 *
 * After a successful move operation, the object is available at the destination path and no longer exists at the
 * source path, unless both paths identify the same object.
 *
 * Atomicity and metadata preservation depend on the underlying storage driver implementation.
 * @since 1.0.0
 */
interface Movable extends Writable {

    /**
     * ### Moves a stored object
     *
     * Moves an existing stored object to another logical storage path.
     *
     * If the destination object already exists, it is replaced.
     *
     * Moving an existing object to itself has no effect.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $source <p>
     * Logical path of the source object.
     * </p>
     * @param \FireHub\Core\Boundary\IO\Storage\Path $destination <p>
     * Logical path of the destination object.
     * </p>
     *
     * @return void
     */
    public function move (Path $source, Path $destination):void;

}