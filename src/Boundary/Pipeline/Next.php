<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=7.4
 * @package Core
 */

namespace FireHub\Core\Boundary\Pipeline;

/**
 * ### Defines the next pipeline execution step
 *
 * Represents a continuation of pipeline execution.
 *
 * Implementations receive an input value and return the resulting output. The continuation may invoke another
 * processing stage or execute the terminal handler.
 *
 * This contract does not prescribe how execution is delegated internally.
 * @since 1.0.0
 *
 * @template TInput
 * @template TOutput
 */
interface Next {

    /**
     * ### Executes the next pipeline step
     *
     * Passes the specified input to the next execution step and returns its result.
     * @since 1.0.0
     *
     * @param TInput $input <p>
     * Input to process.
     * </p>
     *
     * @return TOutput Result of the execution.
     */
    public function handle (mixed $input):mixed;

}