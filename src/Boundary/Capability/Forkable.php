<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.0
 * @package Core
 */

namespace FireHub\Core\Boundary\Capability;

/**
 * ### Defines the ability to create an independently mutable fork
 *
 * Forking provides the ability to create another instance that initially represents the same logical state as the
 * original instance while allowing their states to diverge independently through later mutations.
 *
 * Implementations may initially share internal state between the original and forked instances and defer physical
 * copying until either instance is modified, such as through a copy-on-write strategy.
 *
 * The capability defines only the observable semantics of forking and does not prescribe how state sharing,
 * ownership tracking, detachment, or copying is implemented internally.
 * @since 1.0.0
 */
interface Forkable {

    /**
     * ### Creates an independently mutable fork
     *
     * Creates another instance that initially represents the same logical state as the current instance.
     *
     * The original and forked instances may share internal state until either instance is modified. Subsequent
     * mutations to one instance must not affect the logical state of the other instance.
     * @since 1.0.0
     *
     * @return static The forked instance.
     */
    public function fork ():static;

}