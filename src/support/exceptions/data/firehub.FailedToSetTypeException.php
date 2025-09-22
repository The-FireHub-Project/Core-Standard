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

namespace FireHub\Core\Support\Exceptions\Data;

use FireHub\Core\Support\Exceptions\DataException;

/**
 * ### Failed to set data type exception
 * @since 1.0.0
 *
 * @method $this fromValue (mixed $value) ### Value to try to set to type
 * @method $this toType (\FireHub\Core\Support\Enums\Data\Type $type) ### Type which value was set to convert to
 */
class FailedToSetTypeException extends DataException {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected string $default_message = 'Failed to set value to the type.';

}