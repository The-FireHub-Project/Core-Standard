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
 * ### Identifies a data structure whose values are organized by key association
 *
 * An associative data structure organizes its values through associations between keys and values, where each
 * value is identified or addressed according to an associated key rather than solely by its sequential position.
 *
 * This classification describes the organizational characteristics of a data structure and does not prescribe
 * a specific inheritance relationship, storage representation, key type, access strategy, ordering, or
 * implementation.
 *
 * Associative structures may provide keyed access, keyed mutation, iteration over key-value associations, or
 * additional operations depending on their concrete contract.
 * @since 1.0.0
 */
interface Associative {}