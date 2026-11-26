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
 * ### Locatable storage driver
 *
 * Defines the capability of resolving stored objects to physical local filesystem paths.
 * @since 1.0.0
 */
interface Locatable extends Driver {

    /**
     * ### Resolves the physical path of a stored object
     *
     * Returns the canonical absolute filesystem path of an existing stored object within the storage root.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return non-empty-string Canonical absolute filesystem path.
     */
    public function locate (Path $path):string;

}