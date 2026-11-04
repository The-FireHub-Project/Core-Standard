<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.1
 * @package Core
 */

namespace FireHub\Core\Type\IO;

/**
 * ### Stream Lock Modes
 *
 * Defines the supported locking operations for native PHP streams.
 *
 * Locks are advisory and require cooperating processes to respect them.
 * @since 1.0.0
 */
enum LockMode:int {

    /**
     * ### Shared lock
     *
     * Allows multiple processes to hold shared locks simultaneously.
     * @since 1.0.0
     */
    case SHARED = LOCK_SH;

    /**
     * ### Exclusive lock
     *
     * Requests exclusive access to the resource.
     * @since 1.0.0
     */
    case EXCLUSIVE = LOCK_EX;

    /**
     * ### Non-blocking lock
     *
     * Must be combined with SHARED or EXCLUSIVE.
     * @since 1.0.0
     */
    case NON_BLOCKING = LOCK_NB;

    /**
     * ### Unlock
     *
     * Releases an existing lock.
     * @since 1.0.0
     */
    case UNLOCK = LOCK_UN;

}