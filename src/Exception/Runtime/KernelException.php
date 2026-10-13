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
 * ### Kernel Runtime FireHub Exception
 *
 * Represents failures related to kernel initialization, lifecycle management, and termination.
 *
 * Provides a common exception abstraction for kernel implementations, allowing callers to handle
 * kernel-specific failures independently of the underlying execution environment.
 *
 * - Kernel initialization failure
 * - Invalid kernel lifecycle transition
 * - Kernel shutdown failure
 * - Kernel component initialization failure
 * @since 1.0.0
 */
abstract class KernelException extends RuntimeException {}