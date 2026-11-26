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

namespace FireHub\Core\Boundary\IO\Storage;

/**
 * ### Storage driver
 *
 * Defines the common contract for storage implementations, independent of the underlying storage technology.
 * @since 1.0.0
 */
interface Driver {

    /**
     * ### Determines whether a stored object exists
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return bool True if the stored object exists, false otherwise.
     */
    public function exists (Path $path):bool;

}