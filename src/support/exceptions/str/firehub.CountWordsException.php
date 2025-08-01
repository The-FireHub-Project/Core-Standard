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

namespace FireHub\Core\Support\Exceptions\Str;

use FireHub\Core\Support\Enums\String\Count\WordFormat;
use FireHub\Core\Support\Exceptions\StrException;

/**
 * ### Count words exception
 * @since 1.0.0
 *
 * @method $this withCharacters (?string $characters) ### Characters
 * @method $this withFormat (WordFormat $format) ### Format
 */
class CountWordsException extends StrException {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected string $default_message = 'Failed to count words for string.';

}