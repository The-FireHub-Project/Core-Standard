<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.0
 * @package Core
 */

namespace FireHub\Core\Exception;

use Throwable;

/**
 * ### Runtime FireHub Exception
 *
 * Represents unexpected runtime failures that occur during execution but are not related to business logic or validation.
 *
 * - Service unavailable
 * - Unexpected null state
 * - Internal computation failure
 * @since 1.0.0
 */
abstract class RuntimeException extends FireHubException {

    /**
     * ### Constructor
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Exception\Code::value() As a exception code.
     *
     * @param string $message [optional] <p>
     * The Exception message to throw.
     * </p>
     * @param null|\FireHub\Core\Exception\Code<non-negative-int> $code [optional] <p>
     * The Exception code.
     * </p>
     * @param null|Throwable $previous [optional] <p>
     * he previous throwable used for the exception chaining.
     * </p>
     *
     * @return void
     */
    public function __construct (string $message = '', ?Code $code = null, ?Throwable $previous = null) {

        parent::__construct(
            $message,
            $code?->value() ?? 0,
            $previous
        );

    }

}