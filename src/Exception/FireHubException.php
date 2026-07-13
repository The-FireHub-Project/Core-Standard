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

namespace FireHub\Core\Exception;

use Exception, Throwable;

/**
 * ### Base FireHub Exception
 *
 * Represents a recoverable or expected exceptional condition within the FireHub framework.
 *
 * All framework-specific exceptions MUST extend this class instead of using \Exception directly.
 * @since 1.0.0
 */
abstract class FireHubException extends Exception {

    /**
     * ### Default exception message
     * @since 1.0.0
     */
    protected const string DEFAULT_MESSAGE = 'An unexpected FireHub error occurred.';

    /**
     * ### Default exception code
     * @since 1.0.0
     */
    protected const int DEFAULT_CODE = 0;

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses static::DEFAULT_MESSAGE As a default exception message.
     * @uses static::DEFAULT_CODE As a default exception code.
     *
     * @param null|string $message [optional] <p>
     * The Exception message to throw.
     * </p>
     * @param array<non-empty-string, mixed> $context [optional] <p>
     * Holds structured, machine-readable metadata associated with the exception instance.<br>
     * Context data is intended for logging, debugging, monitoring, and transport layers, and must not replace the
     * human-readable exception message.<br>
     * Keys must be non-empty strings to ensure predictable normalization and serialization.
     * </p>
     * @param null|int $code [optional] <p>
     * The Exception code.
     * </p>
     * @param null|Throwable $previous [optional] <p>
     * The previous throwable used for the exception chaining.
     * </p>
     *
     * @return void
     */
    public function __construct (
        ?string $message = null,
        protected readonly array $context = [],
        ?int $code = null,
        ?Throwable $previous = null
    ) {

        parent::__construct(
            $message ?? static::DEFAULT_MESSAGE,
            $code ?? static::DEFAULT_CODE,
            $previous
        );

    }

    /**
     * ### Returns the exception context
     * @since 1.0.0
     *
     * @return array<non-empty-string, mixed> Context data.
     */
    public function getContext ():array {

        return $this->context;

    }

}