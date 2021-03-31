<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function store(Car $car, Request $request)
    {

        if ($car->ownedBy($request->user())) {
            return response(null, 409);
        }

        $car->transactions()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    public function destroy(Car $car, Request $request)
    {
        $request->user()->transactions()->where('car_id', $car->id)->delete();

        return back();
    }

    public function returnCar(Car $car, Request $request)
    {
        $request->user()->transactions()->where('car_id', $car->id)->update([
           'end_date_time' => date("Y-m-d H:i:s")
        ]);
        return back();
    }
}
