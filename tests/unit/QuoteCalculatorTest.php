<?php

use App\CAP\QuoteCalculator\Discount;
use App\CAP\QuoteCalculator\QuoteCalculator;

class QuoteCalculatorTest extends TestCase
{
    /** @test */
    public function it_calculates_pack_count()
    {
        $quoteCalculator = new QuoteCalculator();

        $result = $quoteCalculator->calculate(20);

        $this->assertEquals(array_get($result, 'regular.price'), 20 * 320);
    }

    /** @test */
    public function it_calculates_total_after_discounts()
    {
        $quoteCalculator = new QuoteCalculator();

        $hourlyPrice = 320;

        $hours = 20;

        $quoteCalculator->setHourlyPrice($hourlyPrice);

        $quoteCalculator->addDiscount(new Discount(0.05, 'Pay upfront'));

        $result = $quoteCalculator->calculate($hours);

        $this->assertEquals(array_get($result, 'regular.price'), $hours * $hourlyPrice);
    }
}
