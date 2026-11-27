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
 * ### Directory-copyable storage driver
 *
 * Defines the capability of copying complete storage directory trees.
 * @since 1.0.0
 */
interface DirectoryCopyable extends DirectoryWritable {

    /**
     * ### Copies a storage directory
     *
     * Recursively copies the source directory and its descendant objects and directories to the specified destination.
     *
     * Empty directories are preserved. The destination parent directory must already exist. The destination
     * directory must not yet exist.
     *
     * Copying an existing directory to itself has no effect. Copying a directory into one of its descendants is not
     * permitted.
     *
     * Metadata preservation depends on the storage driver. Directory copying is not guaranteed to be atomic.
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
    public function copyDirectory (Path $source, Path $destination):void;

}