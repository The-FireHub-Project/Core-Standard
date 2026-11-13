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
use ArrayIterator;

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
     * Compares this Value Object with another instance of the same type using strict class comparison and value
     * equality semantics.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::comparisonValue() To get the comparison value.
     * @uses \FireHub\Core\Type\ValueObject::sameAs() To compare the VO types.
     * @uses \FireHub\Core\Type\ValueObject::compare() To compare the VO values.
     *
     * @param self<TValue> $other <p>
     * The Value Object to compare against.
     * </p>
     *
     * @return bool True if the VOs are equal, false otherwise.
     */
    final public function equals (self $other):bool {

        return $this->sameAs($other)
            && self::compare(
                $this->comparisonValue(),
                $other->comparisonValue()
            );

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
     * ### Returns the value to be used for comparison operations
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::value() To get the value.
     *
     * @return mixed The value to be compared.
     */
    protected function comparisonValue ():mixed {

        return $this->value();

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

    /**
     * ### Compares Values Recursively
     *
     * Performs semantic comparison of nested Value Objects and arrays.
     *
     * Value Objects are compared using their equals() method. Arrays are compared recursively using strict key and
     * value comparison. Scalar values are compared using strict equality.
     * @since 1.0.0
     *
     * @uses \FireHub\Core\Type\ValueObject::equals() To compare Value Objects.
     * @uses \FireHub\Core\Type\ValueObject::compare() To compare arrays.
     *
     * @param mixed $first <p>
     * First value to compare.
     * </p>
     * @param mixed $second <p>
     * Second value to compare.
     * </p>
     *
     * @return bool True if both values are semantically equal.
     */
    private static function compare (mixed $first, mixed $second):bool {

        if ($first instanceof self || $second instanceof self)
            return $first instanceof self
                && $second instanceof self
                && $first->equals($second);

        if (is_array($first) && is_array($second)) {

            $firstIterator = new ArrayIterator($first);
            $secondIterator = new ArrayIterator($second);

            while ($firstIterator->valid() && $secondIterator->valid()) {

                if ($firstIterator->key() !== $secondIterator->key())
                    return false;

                if (!self::compare($firstIterator->current(), $secondIterator->current()))
                    return false;

                $firstIterator->next();
                $secondIterator->next();

            }

            return !$firstIterator->valid() && !$secondIterator->valid();

        }

        return $first === $second;

    }

}