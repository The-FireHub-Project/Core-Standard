<?php declare(strict_types=1);

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

namespace FireHub\Core\Boundary\Capability\Measurement;

/**
 * ### Defines depth measurement
 *
 * Provides the ability to determine the depth of an element within a hierarchical structure.
 *
 * Depth represents the number of structural edges between an element and the root. The root therefore has a depth
 * of zero.
 * @since 1.0.0
 */
interface Depth {

    /**
     * ### Gets the depth
     *
     * Returns the number of structural edges between this element and the root.
     * @since 1.0.0
     *
     * @return non-negative-int Depth of the element.
     */
    public function depth ():int;

}