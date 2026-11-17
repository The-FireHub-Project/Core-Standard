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
 * ### Defines a pipeline processing stage
 *
 * Represents an individual processing component within an execution pipeline.
 *
 * A stage receives an input value and a continuation representing the remaining pipeline execution.
 *
 * The stage may process the input before delegating, inspect or transform the returned result, or return an output
 * without invoking the continuation.
 *
 * Stages are not required to invoke the continuation.
 * @since 1.0.0
 *
 * @template TInput
 * @template TOutput
 */
interface Stage {

    /**
     * ### Processes a pipeline input
     *
     * Executes the processing logic associated with the stage.
     * @since 1.0.0
     *
     * @param TInput $input <p>
     * Input to process.
     * </p>
     * @param \FireHub\Core\Boundary\Pipeline\Next<TInput, TOutput> $next <p>
     * Continuation of pipeline execution.
     * </p>
     *
     * @return TOutput Processing result.
     */
    public function process (mixed $input, Next $next):mixed;

}