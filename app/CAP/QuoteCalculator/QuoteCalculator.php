<?php

namespace App\CAP\QuoteCalculator;

class QuoteCalculator
{
    protected $params = [];

    protected $intermediate = [];

    protected $result = [];

    protected $discounts = [];

    public function calculate($hours)
    {
        $this->calculatePackCount($hours);

        $this->calculateRegularPrice($hours);

        $this->calculatePackDiscountPrice();

        $this->calculateRemainingPrice();

        $this->calculateTotalPrice();

        $this->applyDiscounts();

        return $this->result;
    }

    protected function calculatePackCount($hours)
    {
        $packSize = $this->getPackSize();

        $packCount = intval(round(floor($hours / $packSize), 0));

        $this->setPackCount($packCount);

        $remainingHours = intval($hours % $packSize);

        $this->setRemainingHours($remainingHours);

        return $this;
    }

    protected function calculateRegularPrice($hours)
    {
        $hourlyPrice = $this->getHourlyPrice();

        $regularPrice = $hours * $hourlyPrice;

        $this->setRegularPrice($regularPrice);

        return $this;
    }

    protected function calculatePackDiscountPrice()
    {
        $packCount = $this->getPackCount();

        $packSize = $this->getPackSize();

        $hourlyPrice = $this->getHourlyPrice();

        $regularPrice = $packCount * $packSize * $hourlyPrice;

        $packDiscount = $this->getPackDiscount();

        $discountPrice = $regularPrice * (1 - $packDiscount);

        $this->setPackDiscountPrice($discountPrice);

        return $this;
    }

    protected function calculateRemainingPrice()
    {
        $remainingHours = $this->getRemainingHours();

        $remainingPrice = $remainingHours * $this->getHourlyPrice();

        $this->setRemainingPrice(intval($remainingPrice));

        return $this;
    }

    protected function calculateTotalPrice()
    {
        $packDiscountPrice = $this->getPackDiscountPrice();

        $remainingPrice = $this->getRemainingPrice();

        $this->setTotalPrice(intval($packDiscountPrice + $remainingPrice));

        return $this;
    }

    ///////////////
    // DISCOUNTS //
    ///////////////

    public function addDiscount(Discount $discount)
    {
        $this->discounts[] = $discount;
    }

    public function applyDiscounts()
    {
        $subtotal = $this->getTotalPrice();

        foreach ($this->discounts as $id => $discount) {
            $subtotal *= (1 - $discount->rate);
            array_set($this->result, "total.after.{$id}", $subtotal);
        }
    }

    ////////////
    // PARAMS //
    ////////////

    public function getPackDiscount()
    {
        return array_get($this->params, 'discount.pack', 0.05);
    }

    public function setPackDiscount($discount)
    {
        array_set($this->params, 'discount.pack', $discount);
    }

    public function getPackSize()
    {
        return array_get($this->params, 'pack.size', 5);
    }

    public function setPackSize($size)
    {
        array_set($this->params, 'pack.size', $size);
    }

    public function getHourlyPrice()
    {
        return array_get($this->params, 'price.hour', 320);
    }

    public function setHourlyPrice($price)
    {
        array_set($this->params, 'price.hour', $price);
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getDiscounts()
    {
        return $this->discounts;
    }

    //////////////////
    // INTERMEDIATE //
    //////////////////

    protected function getPackCount()
    {
        return array_get($this->intermediate, 'pack.count', 0);
    }

    protected function setPackCount($count)
    {
        array_set($this->intermediate, 'pack.count', $count);
    }

    protected function getRemainingHours()
    {
        return array_get($this->intermediate, 'pack.remaining-hours');
    }

    protected function setRemainingHours($count)
    {
        array_set($this->intermediate, 'pack.remaining-hours', $count);
    }

    protected function getRemainingPrice()
    {
        return array_get($this->intermediate, 'pack.remaining-price');
    }

    protected function setRemainingPrice($price)
    {
        array_set($this->intermediate, 'pack.remaining-price', $price);
    }

    ////////////
    // RESULT //
    ////////////

    protected function getPackDiscountPrice()
    {
        return array_get($this->result, 'pack.discount.price');
    }

    protected function setPackDiscountPrice($price)
    {
        array_set($this->result, 'pack.discount.price', $price);
    }

    protected function getRegularPrice()
    {
        return array_get($this->result, 'regular.price');
    }

    protected function setRegularPrice($price)
    {
        array_set($this->result, 'regular.price', $price);
    }

    protected function getTotalPrice()
    {
        return array_get($this->result, 'total.price');
    }

    protected function setTotalPrice($price)
    {
        array_set($this->result, 'total.price', $price);
    }
}
