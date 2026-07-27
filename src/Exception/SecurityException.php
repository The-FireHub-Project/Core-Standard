<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Exception;

use Throwable;

/**
 * ### Security FireHub Exception
 *
 * Represents security-related violations such as unauthorized access, permission denial, or integrity violations.
 *
 * - Unauthorized access
 * - Invalid token
 * - Forbidden operation
 * @since 1.0.0
 */
abstract class SecurityException extends FireHubException {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Exception\Code::value() As a exception code.
     *
     * @param null|string $message [optional] <p>
     * The Exception message to throw.
     * </p>
     * @param array<non-empty-string, mixed> $context [optional] <p>
     * Holds structured, machine-readable metadata associated with the exception instance.
     *
     * Context data is intended for logging, debugging, monitoring, and transport layers, and must not replace the
     * human-readable exception message.
     *
     * Keys must be non-empty strings to ensure predictable normalization and serialization.
     * </p>
     * @param null|\FireHub\Core\Exception\Code<non-negative-int> $code [optional] <p>
     * The Exception code.
     * </p>
     * @param null|Throwable $previous [optional] <p>
     * The previous throwable used for the exception chaining.
     * </p>
     *
     * @return void
     */
    public function __construct (?string $message = null, array $context = [], ?Code $code = null, ?Throwable $previous = null) {

        parent::__construct(
            $message,
            $context,
            $code?->value(),
            $previous
        );

    }

}