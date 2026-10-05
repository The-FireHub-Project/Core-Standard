<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability\Access;

use FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node;

/**
 * ### Defines access to a root
 *
 * Provides access to the root of a hierarchical structure.
 *
 * The capability does not prescribe how the root is represented or how the underlying hierarchy is stored.
 * @since 1.0.0
 *
 * @template TValue
 */
interface RootAccess {

    /**
     * ### Gets the root
     *
     * Returns the root of the structure or null when the structure is empty.
     * @since 1.0.0
     *
     * @return null|\FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue> Root, or null when no root
     * exists.
     */
    public function root ():?Node;

}