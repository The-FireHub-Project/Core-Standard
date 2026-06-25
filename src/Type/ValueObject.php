<?php declare(strict_types = 1);

/**
 * This file is part of the FireHub Project ecosystem
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2026-present The FireHub Project - All rights reserved
 * @license https://opensource.org/license/Apache-2-0 Apache License, Version 2.0
 *
 * @php-version >=8.2
 * @package Core
 */

namespace FireHub\Core\Type;

use FireHub\Core\Exception\FireHubException;
use FireHub\Core\Type\Exception\ValueObjectException;

/**
 * ### Base Value Object
 *
 * Defines the base abstraction for all Value Objects within the FireHub Core ecosystem.
 *
 * The ValueObject serves as a fundamental immutable contract for representing identity-less data structures based
 * purely on their value semantics. It enforces consistency across the system by ensuring that all derived Value Objects
 * follow strict immutability rules and structural equality behavior.
 * @since 1.0.0
 *
 * @template TValue
 */
abstract readonly class ValueObject {

    /**
     * ### Returns the raw value of the Value Object
     *
     * Provides the underlying scalar or composite value represented by this Value Object.
     *
     * This value is used for structural comparison and domain-level equality checks.
     * @since 1.0.0
     *
     * @return TValue Raw VO value.
     */
    abstract public function value ():mixed;

    /**
     * ### Determines structural equality between two Value Objects
     *
     * Compares this Value Object with another instance of the same type using strict
     * class comparison and value equality semantics.
     * @param self<TValue> $other <p>
     * The Value Object to compare against.
     * </p>
     *
     * @return bool True if the VOs are equal, false otherwise.
     *@uses \FireHub\Core\Type\ValueObject::value() To compare the VO values.
     *
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::sameAs() To compare the VO types.
     */
    final public function equals (self $other):bool {

        return $this->sameAs($other)
            && $this->value() === $other->value();

    }

    /**
     * ### Checks strict identity equality of a Value Object type
     *
     * Ensures both objects are of the same concrete class without comparing values.
     * @param \FireHub\Core\Type\ValueObject<TValue> $other <p>
     * The Value Object to compare against.
     * </p>
     *
     * @return bool True if the objects are of the same type, false otherwise.
     *@since 1.0.0
     *
     */
    final public function sameAs (self $other):bool {

        return static::class === $other::class;

    }

    /**
     * ### Enforces an invariant condition for the Value Object
     * @since 1.0.0
     *
     * @param callable():bool $condition <p>
     * The validation condition to evaluate.
     * </p>
     * @param callable():\FireHub\Core\Exception\FireHubException $exception <p>
     * Exception to be thrown when the condition fails.
     * </p>
     *
     * @throws \FireHub\Core\Exception\FireHubException If the condition is not met.
     * @throws \FireHub\Core\Type\Exception\ValueObjectException If the exception is not a FireHubException.
     *
     * @return void
     */
    final protected function guard (callable $condition, callable $exception):void {

        if ($condition() === false) {

            $e = $exception();

            if (!$e instanceof FireHubException)
                throw new ValueObjectException(
                    'Guard exception must return instance of FireHubException.'
                );

            throw $e;

        }

    }

}