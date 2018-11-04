<?php

namespace Tests\Modules\Builder;

use Modules\Builder\BuilderOperators;
use Modules\Builder\Exceptions\InvalidOperator;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderOperatorsTest.
 *
 * @package Tests\Modules\Builder
 *
 * @author Anirvan Bhaduri
 * @since 4th Nov 2018
 */
class BuilderOperatorsTest extends TestCase
{
    /**
     * Test validate mechanism for valid builder operator.
     *
     * @throws InvalidOperator
     * @throws \ReflectionException
     *
     * @runInSeparateProcess
     * @covers \Modules\Builder\BuilderOperators::validate
     *
     * @return void
     */
    public function testValidatesTrueWhenValidOperator()
    {
        $validOperator = BuilderOperators::EQUAL;

        $this->assertTrue(BuilderOperators::validate($validOperator));
    }

    /**
     * Test validate mechanism for builder operators.
     *
     * @throws InvalidOperator
     * @throws \ReflectionException
     *
     * @runInSeparateProcess
     * @covers \Modules\Builder\BuilderOperators::validate
     * @expectedException InvalidOperator
     *
     * @return void
     */
    public function testBuilderOperatorValidateThrowsWhenInvalidOperator()
    {
        // this is not in the list of constants for operators
        $invalidOperator = '>==>';

        BuilderOperators::validate($invalidOperator);
    }
}
