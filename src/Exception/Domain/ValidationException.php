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

namespace FireHub\Core\Exception\Domain;

use FireHub\Core\Exception\DomainException;

/**
 * ### Domain Validation FireHub Exception
 *
 * Thrown when input data fails structural or semantic validation rules defined by the system or domain layer.
 *
 * - Invalid DTO input
 * - Missing required fields
 * - Type mismatch in value objects
 * @since 1.0.0
 */
abstract class ValidationException extends DomainException {}