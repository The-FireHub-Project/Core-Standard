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
 * ### Defines mutation at both boundaries
 *
 * Deque mutation combines front mutation and back mutation into a single capability, providing the complete set of
 * insertion and removal operations available at both boundaries of an ordered sequence.
 *
 * The capability defines the fundamental operations for modifying either boundary without prescribing how values
 * are stored, organized, or represented internally.
 * @since 1.0.0
 *
 * @template TValue
 *
 * @extends \FireHub\Foundation\DataStructure\Storage\Capability\FrontMutation<TValue>
 * @extends \FireHub\Foundation\DataStructure\Storage\Capability\BackMutation<TValue>
 */
interface DequeMutation extends FrontMutation, BackMutation {}