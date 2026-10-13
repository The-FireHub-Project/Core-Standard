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

namespace FireHub\Core\Boundary\Kernel;

use FireHub\Core\Boundary\Kernel;

/**
 * ### Defines an application kernel
 *
 * Extends the fundamental kernel lifecycle contract to identify kernels responsible for managing
 * application initialization, lifecycle coordination, and termination.
 *
 * An application kernel orchestrates application-level infrastructure without prescribing how requests,
 * commands, background jobs, or other application operations are executed.
 *
 * Implementations may coordinate configuration, service providers, dependency injection containers,
 * modules, and other application components while remaining independent of specific adapters and
 * execution environments.
 *
 * This interface intentionally introduces no additional operations beyond the fundamental kernel
 * lifecycle, allowing application-specific responsibilities to evolve through separate capability
 * contracts without expanding the base kernel abstraction.
 * @since 1.0.0
 */
interface Application extends Kernel {}