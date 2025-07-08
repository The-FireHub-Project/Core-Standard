<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Web Application Framework package
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2025 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package Core\Components
 *
 * @version GIT: $Id$ Blob checksum.
 */

namespace FireHub\Core\Components\Error;

use Exception as InternalException;

class Exception extends InternalException {

    /**
     * ### Sets the exception message
     * @since 1.0.0
     *
     * @param string $message <p>
     * The exception message.
     * </p>
     *
     * @return $this This exception instance.
     */
    public function withMessage (string $message):static {

        $this->message = $message;

        return $this;

    }

    /**
     * ### Append a message to the exception message
     * @since 1.0.0
     *
     * @param string $message <p>
     * The exception message to append.
     * </p>
     *
     * @return $this This exception instance.
     */
    public function appendMessage (string $message):static {

        $this->message = $this->getMessage().$message;

        return $this;

    }

    /**
     * ### Sets the exception code
     * @since 1.0.0
     *
     * @param int $code <p>
     * The exception code.
     * </p>
     *
     * @return $this This exception instance.
     */
    public function withCode (int $code):static {

        $this->code = $code;

        return $this;

    }

}