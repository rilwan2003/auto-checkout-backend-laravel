<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkout;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        $startTime = Carbon::now();
       
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'product_id' => 'required',
            'time_elapsed' => 'nullable'
        ]);

        $checkout = Checkout::addCheckout($data);

        $endTime = Carbon::now();
        $timeElapsed = $endTime->diffInSeconds($startTime);

        return response()->json([
            'success' => true,
            'message' => 'Checkout added successfully',
            'data' => [
                'id' => $checkout->id,
                'time_elapsed' => $timeElapsed
            ]
        ]);
    }
}
