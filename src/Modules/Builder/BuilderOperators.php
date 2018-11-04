<?php

namespace Modules\Builder;

use Modules\Builder\Exceptions\InvalidOperator;

/**
 * Class BuilderOperators.
 *
 * @package Modules\Builder
 *
 * @author Anirvan Bhaduri
 * @since 4th Nov 2018
 */
class BuilderOperators
{
    /**
     * BuilderOperators constructor.
     *
     * @note Private constructor to ensure no one instantiates this class.
     *
     * @return void
     */
    private function __construct()
    {
        // do nothing
    }

    /**
     * The less than operator.
     *
     * @var string
     */
    const LESS_THAN = '<';

    /**
     * The less than or equal to operator.
     *
     * @var string
     */
    const LESS_THAN_EQUAL = '<=';

    /**
     * The equal operator.
     *
     * @var string
     */
    const EQUAL = '=';

    /**
     * The greater than or equal to operator.
     *
     * @var string
     */
    const GREATER_THAN_EQUAL = '>=';

    /**
     * The greater than operator.
     *
     * @var string
     */
    const GREATER_THAN = '>';

    /**
     * The not equal to operator.
     *
     * @var string
     */
    const NOT_EQUAL = 'neq';

    /**
     * The like operator.
     *
     * e.g. if we do a like with 'temp' for the word 'temptation', it would match.
     *
     * @var string
     */
    const LIKE = 'like';

    /**
     * The in operator.
     *
     * Provide an array.
     *
     * @var string
     */
    const IN = 'in';

    /**
     * The various operators as a helpful array.
     *
     * @var array
     */
    private static $operations;

    /**
     * Validate a given operation string value exists.
     *
     * @throws InvalidOperator
     * @throws \ReflectionException
     *
     * @param string $operation
     *
     * @return bool
     */
    public static function validate(string $operation)
    {
        if (isset(static::$operations) && ! in_array($operation, static::$operations)) {
            throw new InvalidOperator($operation);
        }

        $reflector = new \ReflectionClass(static::class);
        static::$operations = $reflector->getConstants();

        if (! in_array($operation, static::$operations)) {
            throw new InvalidOperator($operation);
        }

        return true;
    }
}