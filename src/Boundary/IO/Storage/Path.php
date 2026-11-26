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

use Stringable;

/**
 * ### Storage path
 *
 * Represents a logical path relative to the root of a storage disk, independent of the underlying storage technology.
 * @since 1.0.0
 */
interface Path extends Stringable {

    /**
     * ### Gets the storage path value
     * @since 1.0.0
     *
     * @return non-empty-string Storage-relative path.
     */
    public function value ():string;

    /**
     * ### Gets the storage path segments
     * @since 1.0.0
     *
     * @return non-empty-list<non-empty-string> Storage path segments.
     */
    public function segments ():array;

}