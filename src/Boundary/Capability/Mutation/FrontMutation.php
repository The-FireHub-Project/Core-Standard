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

namespace FireHub\Core\Boundary\Capability\Mutation;

/**
 * ### Defines mutation at the front boundary
 *
 * Front mutation combines front insertion and front removal into a single capability, providing the complete set
 * of mutation operations available at the front boundary of an ordered sequence.
 *
 * The capability defines only the operations for modifying the front boundary without prescribing how values are
 * stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Core\Boundary\Capability\Mutation\FrontInsertion<TValue>
 * @extends \FireHub\Core\Boundary\Capability\Mutation\FrontRemoval<TValue>
 */
interface FrontMutation extends FrontInsertion, FrontRemoval {}