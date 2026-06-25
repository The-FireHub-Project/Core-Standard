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
 * ### System Runtime FireHub Exception
 *
 * Represents infrastructure or environment-level failures that originate from external systems or framework boundaries.
 *
 * - File system failure
 * - Network failure
 * - DB connection failure
 * - I/O errors
 * @since 1.0.0
 */
abstract class SystemException extends RuntimeException {}