<?php

namespace Modules\Query\Field;

use Modules\Builder\BuilderOperators;
use Modules\Query\Contracts\QueryContract;

/**
 * Class FieldQuery.
 *
 * @package Modules\Query\Field
 *
 * @author Anirvan Bhaduri
 * @since 4th Nov 2018
 */
class FieldQuery implements QueryContract
{
    /**
     * The field name.
     *
     * @var string
     */
    protected $name = '';

    /**
     * The operations associated to the field query.
     *
     * @var array
     */
    protected $operations = [];

    /**
     * FieldQuery constructor.
     *
     * @param string $name
     *
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function stringify(): string
    {
        $operations = urlencode(json_encode($this->operations));

        return "{$this->name}={$operations}";
    }

    /**
     * Get the Field Query name.
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Add an operation to the field.
     *
     * Adding the same operator will overwrite any
     * existing operation with the same operator.
     *
     * @throws \Modules\Builder\Exceptions\InvalidOperator
     * @throws \ReflectionException
     *
     * @param string $operator
     * @param null $value
     *
     * @return QueryContract
     */
    public function addOperation(string $operator, $value = null): QueryContract
    {
        BuilderOperators::validate($operator);

        $this->operations[$operator] = $value;

        return $this;
    }
}
