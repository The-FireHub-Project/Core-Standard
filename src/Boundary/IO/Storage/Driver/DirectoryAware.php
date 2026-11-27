<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\IO\Storage\Driver;

use FireHub\Core\Boundary\IO\Storage\ {
    Driver, Path
};

/**
 * ### Directory-aware storage driver
 *
 * Defines the capability of identifying physical or logical storage directories.
 *
 * Directory awareness does not imply directory modification capabilities.
 * @since 1.0.0
 */
interface DirectoryAware extends Driver {

    /**
     * ### Determines whether a storage directory exists
     *
     * Determines whether the specified logical path identifies an existing storage directory.
     *
     * If no directory is specified, the storage root is inspected. A path identifying a stored file produces false.
     * @since 1.0.0
     *
     * @param null|\FireHub\Core\Boundary\IO\Storage\Path $directory [optional] <p>
     * Logical directory path or null to inspect the storage root.
     * </p>
     *
     * @return bool True if the specified storage directory exists.
     */
    public function directoryExists (?Path $directory = null):bool;

}