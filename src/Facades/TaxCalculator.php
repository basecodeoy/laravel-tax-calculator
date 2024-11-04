<?php

declare(strict_types=1);

namespace BaseCodeOy\TaxCalculator\Facades;

use Illuminate\Support\Facades\Facade;

final class TaxCalculator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'tax-calculator';
    }
}
