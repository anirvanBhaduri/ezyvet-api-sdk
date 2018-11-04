<?php

namespace Modules\Builder\Exceptions;

/**
 * Class InvalidOperator.
 *
 * @package Modules\Builder\Exceptions
 *
 * @author Anirvan Bhaduri
 * @since 4th Nov 2018
 */
class InvalidOperator extends \Exception
{
    /**
     * The template message to use when an operator is provided.
     *
     * @var string
     */
    protected $template = 'The %s operator is an invalid operator.';

    /**
     * The default message for the exception.
     *
     * @var string
     */
    protected $message = 'The provided operator is an invalid operator.';

    /**
     * InvalidOperator constructor.
     *
     * @param string $operator
     * @param int $code
     * @param \Exception|null $previous
     *
     * @return void
     */
    public function __construct(string $operator = '', $code = 0, \Exception $previous = null)
    {
        $message = $this->message;

        if (isset($operator) && ! empty($operator)) {
            $message = sprintf($this->template, $operator);
        }

        parent::__construct($message, $code, $previous);
    }
}