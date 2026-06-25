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
     * ### Constructor
     * @since 1.0.0
     *
     * @param string $message [optional] <p>
     * The Exception message to throw.
     * </p>
     * @param int $code [optional] <p>
     * The Exception code.
     * </p>
     * @param null|Throwable $previous [optional] <p>
     * he previous throwable used for the exception chaining.
     * </p>
     *
     * @return void
     */
    public function __construct (string $message = '', int $code = 0, ?Throwable $previous = null) {

        parent::__construct($message, $code, $previous);

    }

}