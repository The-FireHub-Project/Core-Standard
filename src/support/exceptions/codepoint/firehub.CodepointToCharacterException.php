<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @php-version 7.4
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Exceptions\Codepoint;

use FireHub\Core\Support\Exceptions\CodepointException;

/**
 * ### Codepoint to character conversion exception
 * @since 1.0.0
 */
class CodepointToCharacterException extends CodepointException {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected string $default_message = "Codepoint couldn't be converted to character.";

}