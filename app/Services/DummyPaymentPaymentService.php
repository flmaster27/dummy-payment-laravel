<?php namespace App\Services;

use App\Contracts\PaymentContract;

class DummyPaymentPaymentService implements PaymentContract
{

    public function make()
    {
        return snake_case(class_basename(self::class));
    }
}