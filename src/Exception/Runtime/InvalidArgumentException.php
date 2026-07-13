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
 * ### Invalid Argument FireHub Exception
 *
 * Represents failures caused by invalid or unsupported arguments provided to a runtime operation.
 *
 * - Empty required data
 * - Invalid input format
 * - Unsupported argument value
 * - Argument outside accepted constraints
 * @since 1.0.0
 */
abstract class InvalidArgumentException extends RuntimeException {}