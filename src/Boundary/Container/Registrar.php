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

namespace FireHub\Core\Boundary\Container;

use FireHub\Core\Meta\Enum\Container\Lifetime;
use Closure;

/**
 * ### Defines service registration capabilities
 *
 * Provides the ability to register service instances and associate service identifiers with their implementations
 * without prescribing how registrations are stored or resolved.
 * @since 1.0.0
 */
interface Registrar {

    /**
     * ### Registers a class-based service
     *
     * Associates a service identifier with a concrete implementation class.
     *
     * The service is instantiated lazily according to the specified lifetime.
     * @since 1.0.0
     *
     * @template TService of object
     *
     * @param class-string<TService> $id <p>
     * Service identifier.
     * </p>
     * @param class-string<TService> $class <p>
     * Concrete implementation class.
     * </p>
     * @param \FireHub\Core\Meta\Enum\Container\Lifetime $lifetime [optional] <p>
     * Service lifetime.
     * </p>
     *
     * @return $this Registrar instance.
     */
    public function bind (string $id, string $class, Lifetime $lifetime = Lifetime::TRANSIENT):self;

    /**
     * ### Registers a factory-based service
     *
     * Registers a factory responsible for creating the requested service.
     *
     * The factory receives a contextual resolver to resolve dependencies within the current resolution context.
     * @since 1.0.0
     *
     * @template TService of object
     *
     * @param class-string<TService> $id <p>
     * Service identifier.
     * </p>
     * @param Closure(\FireHub\Core\Boundary\Resolver):TService $factory <p>
     * Service factory.
     * </p>
     * @param \FireHub\Core\Meta\Enum\Container\Lifetime $lifetime [optional] <p>
     * Service lifetime.
     * </p>
     *
     * @return $this Registrar instance.
     */
    public function factory (string $id, Closure $factory, Lifetime $lifetime = Lifetime::TRANSIENT):self;

    /**
     * ### Registers an existing service instance
     *
     * Registers an already constructed object as a singleton service.
     *
     * The provided instance is returned directly during resolution.
     * @since 1.0.0
     *
     * @template TService of object
     *
     * @param class-string<TService> $id <p>
     * Service identifier.
     * </p>
     * @param TService $instance <p>
     * Existing service instance.
     * </p>
     *
     * @return $this Registrar instance.
     */
    public function instance (string $id, object $instance):self;

    /**
     * ### Registers a service alias
     *
     * Associates an additional identifier with another registered service.
     *
     * Aliases preserve the lifetime and identity of the target service.
     * @since 1.0.0
     *
     * @template TService of object
     *
     * @param class-string<TService> $id <p>
     * Alias identifier.
     * </p>
     * @param class-string<TService> $target <p>
     * Target service identifier.
     * </p>
     *
     * @return $this Registrar instance.
     */
    public function alias (string $id, string $target):self;

}