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

use Exception as InternalException, Throwable;

use function array_key_first;

class Exception extends InternalException {

    /**
     * ### Holds additional information for the current error
     * @since 1.0.0
     *
     * @var array<non-empty-string, mixed>
     */
    private(set) array $info = [];

    /**
     * ### The error message
     * @since 1.0.0
     *
     * @var mixed
     */
    protected $message = '';

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @param null|Throwable $previous [optional] <p>
     * The previous throwable used for the exception chaining.
     * </p>
     *
     * @return void
     */
    final public function __construct (?Throwable $previous = null) {

        parent::__construct(previous: $previous);

    }

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
     * ### Prepend a message to the exception message
     * @since 1.0.0
     *
     * @param string $message <p>
     * The exception message to prepend.
     * </p>
     *
     * @return $this This exception instance.
     */
    public function prependMessage (string $message):static {

        $this->message = $message.' '.$this->getMessage();

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

        $this->message = $this->getMessage().' '.$message;

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

    /**
     * ### Invoking methods to set property
     * @since 1.0.0
     *
     * @param non-empty-string $method <p>
     * Method name.
     * </p>
     * @param array<array-key, mixed> $arguments <p>
     * List of arguments.
     * </p>
     *
     * @return $this This exception instance.
     */
    final public function __call (string $method, array $arguments):static {

        $key = array_key_first($arguments);

        $this->info[$method] = isset($key) ? $arguments[$key] : '';

        return $this;

    }

}