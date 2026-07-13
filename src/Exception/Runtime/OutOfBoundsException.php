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

namespace FireHub\Core\Exception\Runtime;

use FireHub\Core\Exception\RuntimeException;

/**
 * ### Out of Bounds FireHub Exception
 *
 * Represents failures caused by accessing elements outside the valid range.
 *
 * - Index out of bounds
 * - Position outside a valid range
 * @since 1.0.0
 */
abstract class OutOfBoundsException extends RuntimeException {}