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

namespace FireHub\Core\Boundary\Type\DataStructure\Classification;

/**
 * ### Identifies a data structure whose values are organized in a linear sequence
 *
 * A linear data structure organizes its values along a single sequential dimension, where each value has a
 * defined position relative to other values. Values are arranged according to a logical order that allows
 * traversal from one position to the next.
 *
 * This classification describes the organizational characteristics of a data structure and does not prescribe
 * a specific inheritance relationship, storage representation, access strategy, or implementation.
 *
 * Linear structures may provide positional access, sequential traversal, or operations at one or both ends of
 * the sequence depending on their concrete contract.
 * @since 1.0.0
 */
interface Linear {}