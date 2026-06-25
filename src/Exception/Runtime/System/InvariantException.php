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

namespace FireHub\Core\Exception\Runtime\System;

use FireHub\Core\Exception\Runtime\SystemException;

/**
 * ### Invariant System FireHub Exception
 *
 * Represents a violation of an internal system or framework invariant within the FireHub ecosystem.
 *
 * - Invalid format
 * - Empty code
 * - Illegal state
 * @since 1.0.0
 */
abstract class InvariantException extends SystemException {}