<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function getCheckout()
    {
        return view('checkout');
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'post_code' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'notes' => 'required'
        ]);

        Order::create($request->all());

        return redirect()->route('checkout')
            ->with('success', 'Checkout successfully!');
    }
}
