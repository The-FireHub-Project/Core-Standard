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

namespace FireHub\Core\Exception\Runtime\System\Invariant;

use FireHub\Core\Exception\Runtime\System\InvariantException;

/**
 * ### Invalid Code Value Exception
 *
 * Represents a violation of the invariants required by the FireHub Code Value Object.
 *
 * This exception is thrown when an invalid value is used to construct or maintain a valid exception code within the
 * FireHub exception system.
 *
 * Typical causes include:
 * - Negative error codes
 * - Zero values when prohibited by the framework
 * - Values outside the supported error code range
 * - Any state that would result in an invalid Code Value Object
 *
 * This exception indicates a programming error or framework contract violation rather than a recoverable business or
 * validation failure.
 * @since 1.0.0
 */
class InvalidCodeValueException extends InvariantException {}