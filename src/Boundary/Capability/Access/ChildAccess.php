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

namespace FireHub\Core\Boundary\Capability\Access;

use FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node;

/**
 * ### Defines access to child elements
 *
 * Provides access to the direct children of an element within a hierarchical structure.
 *
 * This capability exposes only immediate children. Descendants below the first child level are not included.
 * @since 1.0.0
 *
 * @template TValue
 */
interface ChildAccess {

    /**
     * ### Gets the children
     *
     * Returns the direct children of the specified element in their structural order.
     * @since 1.0.0
     *
     * @param \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue> $parent <p>
     * Parent whose direct children to retrieve.
     * </p>
     *
     * @return iterable<int, \FireHub\Core\Boundary\Type\DataStructure\Collection\Tree\Node<TValue>> Direct children.
     */
    public function children (Node $parent):iterable;

}