<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @php-version 5.0
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Exceptions;

use FireHub\Core\Support\Enums\String\Encoding;
use FireHub\Core\Components\Error\Exception;

/**
 * ### Character exception
 * @since 1.0.0
 *
 * @method $this withCharacter (string $character) ### Character
 * @method $this withEncoding (?Encoding $encoding) ### Encoding
 */
class CharException extends Exception {}