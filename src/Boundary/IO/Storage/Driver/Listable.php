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

use FireHub\Core\Boundary\IO\Storage\ {
    Driver, Path
};

/**
 * ### Listable storage driver
 *
 * Defines the capability of listing stored objects and directories within a storage driver.
 *
 * Directories may represent physical filesystem directories or logical object prefixes, depending on the storage
 * driver implementation.
 *
 * Listing operations may be evaluated lazily.
 * @since 1.0.0
 */
interface Listable extends Driver {

    /**
     * ### Lists stored objects
     *
     * Lists stored objects within the specified directory.
     *
     * If no directory is specified, objects are listed from the storage root. Recursive listing includes objects
     * within descendant directories.
     *
     * Returned paths are relative to the storage root. The order of returned paths is not guaranteed.
     * @since 1.0.0
     *
     * @param null|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to list from the storage root.
     * </p>
     * @param bool $recursive [optional] <p>
     * Whether objects within descendant directories should be included.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\IO\Storage\Path> Logical paths of stored objects.
     */
    public function files (?Path $directory = null, bool $recursive = false):iterable;

    /**
     * ### Lists storage directories
     *
     * Lists directories within the specified directory.
     *
     * If no directory is specified, directories are listed from the storage root. Recursive listing includes all
     * descendant directories.
     *
     * The specified directory itself is not included in the result.
     *
     * Returned paths are relative to the storage root. The order of returned paths is not guaranteed.
     * @since 1.0.0
     *
     * @param null|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to list from the storage root.
     * </p>
     * @param bool $recursive [optional] <p>
     * Whether all descendant directories should be included.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\IO\Storage\Path> Logical paths of storage directories.
     */
    public function directories (?Path $directory = null, bool $recursive = false):iterable;

}