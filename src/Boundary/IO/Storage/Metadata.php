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

namespace FireHub\Core\Boundary\IO\Storage;

use FireHub\Core\Type\Temporal\DateTime;

/**
 * ### Storage object metadata
 *
 * Represents a snapshot of basic metadata associated with a stored regular object.
 *
 * Metadata availability may vary depending on the underlying storage driver and its capabilities.
 * @since 1.0.0
 */
interface Metadata {

    /**
     * ### Retrieves the logical storage object path
     * @since 1.0.0
     *
     * @return \FireHub\Core\Boundary\IO\Storage\Path Logical storage object path.
     */
    public function path ():Path;

    /**
     * ### Retrieves the stored object size
     *
     * The size represents the logical object content length in bytes, rather than the physical storage allocation size.
     * @since 1.0.0
     *
     * @return non-negative-int Stored object size in bytes.
     */
    public function size ():int;

    /**
     * ### Retrieves the last modification time
     *
     * Returns null if the underlying storage driver cannot provide the last modification time.
     * @since 1.0.0
     *
     * @return null|\FireHub\Core\Type\Temporal\DateTime<non-empty-string> Last modification time or null if
     * unavailable.
     */
    public function lastModified ():?DateTime;

}