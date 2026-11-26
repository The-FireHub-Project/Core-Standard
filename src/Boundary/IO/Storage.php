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

namespace FireHub\Core\Boundary\IO;

use FireHub\Core\Boundary\IO\Storage\Disk;

/**
 * ### Storage service
 *
 * Provides centralized access to named storage disks independently of their underlying storage technologies.
 * @since 1.0.0
 */
interface Storage {

    /**
     * ### Gets a registered storage disk
     *
     * Returns the default storage disk when no name is provided.
     * @since 1.0.0
     *
     * @param null|non-empty-string $name <p>
     * Name of the storage disk or null to resolve the default disk.
     * </p>
     *
     * @return \FireHub\Core\Boundary\IO\Storage\Disk Registered storage disk.
     */
    public function disk (?string $name = null):Disk;

    /**
     * ### Determines whether a storage disk is registered
     * @since 1.0.0
     *
     * @param non-empty-string $name <p>
     * Name of the storage disk.
     * </p>
     *
     * @return bool True if the storage disk is registered, false otherwise.
     */
    public function has (string $name):bool;

    /**
     * ### Gets the name of the default storage disk
     * @since 1.0.0
     *
     * @return null|non-empty-string Default storage disk name or null if no default disk is configured.
     */
    public function default ():?string;

    /**
     * ### Gets the names of all registered storage disks
     * @since 1.0.0
     *
     * @return list<non-empty-string> Registered storage disk names.
     */
    public function names ():array;

}