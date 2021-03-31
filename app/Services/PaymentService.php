<?php


namespace App\Services;


use App\Models\Car;
use App\Models\User;


class PaymentService
{
    public function pay(User $user, Car $car, int $days)
    {
        $priceToPay = $car->price_per_day * $days;

        $user->profile()->wallet =- $priceToPay;
    }
}
