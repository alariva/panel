<?php

namespace App\CAP\QuoteCalculator;

class Discount
{
    public $description;

    public $rate;

    public $limit;

    public function __construct($rate, $description, $limit = null)
    {
        $this->rate = $rate;

        $this->description = $description;

        $this->limit = $limit;
    }
}
