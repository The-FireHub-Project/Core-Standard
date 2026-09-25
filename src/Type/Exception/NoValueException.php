<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.3
 * @package Core
 */

namespace FireHub\Core\Type\Exception;

/**
 * ### Thrown when attempting to access a value that does not exist
 *
 * This exception is thrown when an operation attempts to retrieve the contained value from a Maybe instance that
 * represents the absence of a value.
 * @since 1.0.0
 */
final class NoValueException extends ValueObjectException {

    protected const string DEFAULT_MESSAGE = 'No value exists';

}