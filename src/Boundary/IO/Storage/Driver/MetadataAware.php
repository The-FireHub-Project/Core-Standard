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
    Driver, Metadata, Path
};

/**
 * ### Metadata-aware storage driver
 *
 * Defines the ability to retrieve basic metadata associated with stored regular objects.
 *
 * Metadata retrieval does not require the driver to expose the underlying physical storage location or object contents.
 * @since 1.0.0
 */
interface MetadataAware extends Driver {

    /**
     * ### Retrieves stored object metadata
     *
     * Returns a snapshot of basic metadata associated with the specified stored regular object.
     *
     * Metadata retrieval does not include content checksum calculation or content-based media type detection.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\IO\Storage\Path $path <p>
     * Logical path of the stored object.
     * </p>
     *
     * @return \FireHub\Core\Boundary\IO\Storage\Metadata Stored object metadata.
     */
    public function metadata (Path $path):Metadata;

}