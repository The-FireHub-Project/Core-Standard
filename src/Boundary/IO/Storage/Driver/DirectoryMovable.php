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
 * ### Directory-movable storage driver
 *
 * Defines the capability of moving complete storage directory trees.
 * @since 1.0.0
 */
interface DirectoryMovable extends DirectoryWritable {

    /**
     * ### Moves a storage directory
     *
     * Moves the source directory and its descendant objects and directories to the specified destination.
     *
     * Empty directories are preserved. The destination parent directory must already exist. The destination
     * directory must not yet exist.
     *
     * Moving an existing directory to itself has no effect. Moving a directory into one of its descendants is not
     * permitted.
     *
     * After a successful move, the source directory no longer exists unless both paths identify the same directory.
     *
     * Metadata preservation and atomicity depend on the storage driver.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $source <p>
     * Logical path of the source directory.
     * </p>
     * @param \FireHub\Core\Boundary\IO\Storage\Path $destination <p>
     * Logical path of the destination directory.
     * </p>
     *
     * @return void
     */
    public function moveDirectory (Path $source, Path $destination):void;

}