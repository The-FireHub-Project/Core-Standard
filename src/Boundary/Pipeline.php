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

namespace FireHub\Core\Boundary;

use FireHub\Core\Boundary\Pipeline\Next;

/**
 * ### Defines an execution pipeline
 *
 * Represents an ordered sequence of processing stages that execute around a terminal handler.
 *
 * Each stage may delegate execution to the next stage, transform the input passed downstream, modify the returned
 * result, or terminate processing without invoking later stages.
 *
 * Pipeline implementations determine how stages are composed and executed.
 * @since 1.0.0
 *
 * @template TInput
 * @template TOutput
 *
 * @extends \FireHub\Core\Boundary\Pipeline\Next<TInput, TOutput>
 */
interface Pipeline extends Next {}