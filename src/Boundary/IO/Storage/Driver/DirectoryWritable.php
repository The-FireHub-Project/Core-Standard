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
 * ### Directory-writable storage driver
 *
 * Defines the capability of creating and deleting storage directories.
 * @since 1.0.0
 */
interface DirectoryWritable extends DirectoryAware {

    /**
     * ### Creates a storage directory
     *
     * Creates a directory at the specified logical storage path.
     *
     * Creating an existing directory has no effect. Recursive creation includes all missing parent directories.
     *
     * If recursive creation is disabled, the parent directory must already exist.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $directory <p>
     * Logical path of the directory to create.
     * </p>
     * @param bool $recursive [optional] <p>
     * Whether missing parent directories should also be created.
     * </p>
     *
     * @return void
     */
    public function makeDirectory (Path $directory, bool $recursive = false):void;

    /**
     * ### Deletes a storage directory
     *
     * Deletes the directory at the specified logical storage path.
     *
     * Deleting a nonexistent directory has no effect. Recursive deletion includes all descendant objects and
     * directories.
     *
     * If recursive deletion is disabled, the directory must be empty.
     *
     * Recursive deletion is not guaranteed to be atomic.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $directory <p>
     * Logical path of the directory to delete.
     * </p>
     * @param bool $recursive [optional] <p>
     * Whether descendant objects and directories should also be deleted.
     * </p>
     *
     * @return void
     */
    public function deleteDirectory (Path $directory, bool $recursive = false):void;

}