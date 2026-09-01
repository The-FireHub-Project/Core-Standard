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

namespace FireHub\Core\Boundary\Type;

/**
 * ### Represents a fundamental contract for a data structure
 *
 * A data structure defines a structured way of organizing, storing, accessing, and manipulating data. It
 * provides the conceptual contract that implementations must follow when representing a particular
 * organization of data.
 *
 * Data structures may differ in their internal representation, access patterns, ordering guarantees, mutation
 * behavior, and operational characteristics. The contract defines their externally observable behavior without
 * prescribing how the underlying data must be stored or processed.
 *
 * Data structures are not value objects. Their purpose is to provide structured data organization and operations
 * rather than to represent a domain value identified solely by its value.
 * @since 1.0.0
 *
 * @template TValue
 */
interface DataStructure {}