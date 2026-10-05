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

namespace FireHub\Core\Boundary\Type\DataStructure\Collection\Tree;

use FireHub\Core\Boundary\Capability\Measurement\ {
    Depth, Height
};

/**
 * ### Tree node
 *
 * Represents a structural position within a tree data structure.
 *
 * A tree node contains a value and provides structural navigation to its parent, children, and adjacent siblings.
 * Node identity is independent of the stored value, allowing multiple nodes containing equal values to represent
 * distinct positions within the same tree.
 *
 * The node exposes its depth and height as structural measurements relative to the hierarchy it belongs to.
 * @since 1.0.0
 *
 * @template TValue
 */
interface Node extends Depth, Height {

    /**
     * ### Checks whether this node is the root
     *
     * Determines whether this node represents the root of its tree.
     * @since 1.0.0
     *
     * @return bool True if this node is the root, false otherwise.
     */
    public function isRoot ():bool;

    /**
     * ### Checks whether this node is a leaf
     *
     * Determines whether this node has no child nodes.
     * @since 1.0.0
     *
     * @return bool True if this node is a leaf, false otherwise.
     */
    public function isLeaf ():bool;

    /**
     * ### Gets the value
     *
     * Returns the value stored by this node.
     * @since 1.0.0
     *
     * @return TValue Stored value.
     */
    public function value ():mixed;

    /**
     * ### Gets the parent
     *
     * Returns the parent node, or null when this node is the root.
     * @since 1.0.0
     *
     * @return null|static<TValue> Parent node, or null for the root.
     */
    public function parent ():?static;

    /**
     * ### Gets the first child
     *
     * Returns the first direct child node, or null when this node has no children.
     * @since 1.0.0
     *
     * @return null|static<TValue> First child node, or null when no children exist.
     */
    public function firstChild ():?static;

    /**
     * ### Gets the last child
     *
     * Returns the last direct child node, or null when this node has no children.
     * @since 1.0.0
     *
     * @return null|static<TValue> Last child node, or null when no children exist.
     */
    public function lastChild ():?static;

    /**
     * ### Gets the previous sibling
     *
     * Returns the immediately preceding sibling node, or null when this node is the first child or root.
     * @since 1.0.0
     *
     * @return null|static<TValue> Previous sibling node, or null when none exists.
     */
    public function previousSibling ():?static;

    /**
     * ### Gets the next sibling
     *
     * Returns the immediately following sibling node, or null when this node is the last child or root.
     * @since 1.0.0
     *
     * @return null|static<TValue> Next sibling node, or null when none exists.
     */
    public function nextSibling ():?static;

}