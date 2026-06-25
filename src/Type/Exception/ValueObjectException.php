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

namespace FireHub\Core\Type\Exception;

use FireHub\Core\Exception\Runtime\System\InvariantException;

/**
 * ### Value Object invariant violation
 *
 * Thrown when a Value Object breaks its defined invariant rules.
 *
 * This exception indicates a programming contract violation inside the Value Object layer, meaning the object has
 * been constructed or mutated with an invalid state that is not allowed under its invariants.
 * @since 1.0.0
 */
class ValueObjectException extends InvariantException {}