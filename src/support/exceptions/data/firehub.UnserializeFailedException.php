<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @php-version 7.1
 * @package Core\Support
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Support\Exceptions\Data;

use FireHub\Core\Support\Exceptions\DataException;

/**
 * ### Unserialize failed exception
 * @since 1.0.0
 *
 * @method $this triedWith (mixed $data) ### Data tried to unserialize
 */
class UnserializeFailedException extends DataException {

    /**
     * @inheritDoc
     *
     * @since 1.0.0
     */
    protected $message = 'Cannot unserialize data.';

}