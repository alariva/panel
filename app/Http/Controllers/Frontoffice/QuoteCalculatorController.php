<?php

namespace App\Http\Controllers\Frontoffice;

use App\CAP\QuoteCalculator\Discount;
use App\CAP\QuoteCalculator\Parameters;
use App\CAP\QuoteCalculator\QuoteCalculator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuoteCalculatorController extends Controller
{
    public function show()
    {
        return view('frontoffice.quotecalculator.show');
    }

    public function post(Request $request)
    {
        $quoteCalculator = new QuoteCalculator();

        $hours = $request->input('hours');

        $parameters = new Parameters(auth()->id());

        $hourlyPrice = $parameters->get('hourlyPrice');

        $quoteCalculator->setHourlyPrice($hourlyPrice);

        $quoteCalculator->setPackSize($parameters->get('packSize'));

        $quoteCalculator->setPackDiscount($parameters->get('packDiscount'));

        $quoteCalculator->addDiscount(new Discount(0.05, 'Pago adelantado'));

        $result = $quoteCalculator->calculate($hours);

        $params = $quoteCalculator->getParams();

        $discounts = $quoteCalculator->getDiscounts();

        return view('frontoffice.quotecalculator.result', compact('result', 'params', 'hours', 'hourlyPrice', 'discounts'));
    }
}
