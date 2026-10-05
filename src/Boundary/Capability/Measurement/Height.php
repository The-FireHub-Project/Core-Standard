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

namespace FireHub\Core\Boundary\Capability\Measurement;

/**
 * ### Defines height measurement
 *
 * Provides the ability to determine the height of a hierarchical structure or element.
 *
 * Height represents the maximum number of structural edges between the measured element and any leaf below it. A
 * leaf therefore has a height of zero.
 * @since 1.0.0
 */
interface Height {

    /**
     * ### Gets the height
     *
     * Returns the maximum number of structural edges between this element and any leaf below it.
     * @since 1.0.0
     *
     * @return non-negative-int Height.
     */
    public function height ():int;

}