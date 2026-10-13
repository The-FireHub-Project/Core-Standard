<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Type\DataStructure\Classification;

/**
 * ### Identifies a data structure whose values are organized hierarchically
 *
 * A hierarchical data structure organizes values through parent-child relationships, forming one or more levels of
 * structural descent.
 *
 * This classification describes organizational topology and does not prescribe node representation, branching
 * constraints, traversal strategy, ordering, balancing, or storage implementation.
 * @since 1.0.0
 */
interface Hierarchical {}