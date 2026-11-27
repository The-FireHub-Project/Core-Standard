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
 * ### Copyable storage driver
 *
 * Defines the capability of copying stored objects within the same storage driver.
 *
 * The source object remains unchanged after a successful copy operation.
 *
 * Copying object metadata and permissions depend on the underlying storage driver implementation.
 * @since 1.0.0
 */
interface Copyable extends Writable {

    /**
     * ### Copies a stored object
     *
     * Copies the contents of an existing stored object to another logical storage path.
     *
     * If the destination object already exists, it is replaced.
     *
     * Copying an existing object to itself has no effect.
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
    public function copy (Path $source, Path $destination):void;

}