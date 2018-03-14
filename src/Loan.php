<?php


namespace Refactoring;


class Loan
{
    /**
     * @var float
     */
    private $commitment;
    /**
     * @var int
     */
    private $riskRating;
    /**
     * @var \DateTimeImmutable
     */
    private $maturity;
    /**
     * @var \DateTimeImmutable
     */
    private $expiry;

    public function __construct(
        float $commitment,
        int $riskRating,
        \DateTimeImmutable $maturity,
        \DateTimeImmutable $expiry = null
    ){
        $this->commitment = $commitment;
        $this->riskRating = $riskRating;
        $this->maturity = $maturity;
        $this->expiry = $expiry;
    }

    public function isHighRisk()
    {

    }


}