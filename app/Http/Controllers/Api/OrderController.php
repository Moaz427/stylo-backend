<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'  => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'address'        => 'required|string',
            'total'          => 'required|numeric',
            'items'          => 'required|array|min:1',
        ]);

        $order = Order::create([
            'customer_name'  => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'address'        => $request->address,
            'total'          => $request->total,
        ]);

        foreach ($request->items as $item) {
            $order->items()->create([
                'product_id' => $item['id'],
                'quantity'   => $item['quantity'],
                'price'      => $item['price'],
            ]);
        }

        return response()->json([
            'message' => 'Order placed successfully!',
            'order_id' => $order->id,
        ], 201);
    }
}
