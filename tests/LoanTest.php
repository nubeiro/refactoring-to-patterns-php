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
        $maturity = new \DateTimeImmutable("+1 month");
        $loan = new Loan(
            0.5,
            90,
            $maturity
        );
        $this->assertFalse($loan->isHighRisk());
    }

    public function testStateBonusLoanHasLowRisk()
    {
        $expiry = new \DateTimeImmutable("+10 years");
        $loan = new Loan(
            $expiry
        );
        $this->assertFalse($loan->isHighRisk());
    }

}
