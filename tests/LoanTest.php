<?php

namespace Refactoring\Tests;

use Refactoring\Loan;
use PHPUnit\Framework\TestCase;

class LoanTest extends TestCase
{
    public function testLongTermLoansHaveHighRisk(){
        $loan = new Loan(
            0.5,
            90,
            new \DateTimeImmutable("6 months")
        );
        $this->assertTrue($loan->isHighRisk());
    }

    public function testShortTermLoanHasLowRisk(){
        $loan = new Loan(
            0.5,
            90,
            new \DateTimeImmutable("1 month")
        );
        $this->assertFalse($loan->isHighRisk());
    }
}
