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
 * ### Identifies a data structure whose values have no defined positional order
 *
 * An unordered data structure organizes its values without assigning semantic significance to their relative
 * positions or iteration order. Values belong to the structure independently of where they appear in its
 * underlying representation.
 *
 * This classification describes the organizational characteristics of a data structure and does not prescribe
 * a specific inheritance relationship, storage representation, lookup strategy, iteration order, or
 * implementation.
 *
 * Unordered structures may provide membership testing, uniqueness semantics, multiplicity semantics, or other
 * operations depending on their concrete contract.
 * @since 1.0.0
 */
interface Unordered {}