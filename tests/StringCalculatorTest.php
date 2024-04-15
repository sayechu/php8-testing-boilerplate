<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;

    /**
     * @test
     */
    public function givenEmptyArgsReturnsZero(): void
    {
        $result = $this->stringCalculator->add('');

        $this->assertEquals(0, $result);
    }

    /**
     * @test
     */
    public function givenOneNumberReturnsThatNumber(): void
    {
        $result = $this->stringCalculator->add('1');

        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
    public function givenTwoNumbersSplitByCommaReturnsTheAddedAmount(): void
    {
        $result = $this->stringCalculator->add('1,2');

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function givenNNumbersReturnsTheAddedAmount(): void
    {
        $result = $this->stringCalculator->add('1,2,3,4');

        $this->assertEquals(10, $result);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->stringCalculator = new StringCalculator();
    }
}