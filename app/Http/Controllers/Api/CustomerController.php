<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Validator;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public $success = 200;
    public $error = 404;
    public $validate_error = 401;

    public function show_product()
    {
        $user = Auth::user();
        if ($user->type == 'User') {
            $product = Product::all();
            return response()->json([
                'products' => $product,
                'message' => 'success',
                'status' => 'success',
            ],$this->success);
        }
        return response()->json([
            'message' => 'User Not Login',
            'status' => 'error',
        ],$this->error);
    }
    public function show_products_detail($id)
    {
        $product = Product::where('id', $id)->get();
        return response()->json([
            'products' => $product,
            'message' => 'success',
            'status' => 'success',
        ],$this->success);
    }

    public function purchase($product_id)
    {
        $product = Product::where('id', $product_id)->get();
        return response()->json([
            'products' => $product,
            'message' => 'success',
            'status' => 'success',
        ],$this->success);
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'product_id' => 'required',
            'delivery_address' => 'required'
        ]);

        //If any Validation fail
        if ($validator->fails()) {
             return response()->json(['status' => 'error','message'=>$validator->errors(),'validaterror'=>"1", 'key1' => 2], 401);
        }
        $order = Order::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'phone_no' => $request->phone_no,
            'delivery_address' => $request->delivery_address,
            'any_note' => $request->any_note,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'order_status' => 'pending',
        ]);
        if ($order) {
            return response()->json([
                'order' => $order,
                'message' => 'Order Successfull',
                'status' => 'success',
            ],$this->success);
        }else {
            return response()->json([
                'message' => 'There was some issue',
                'status' => 'error',
            ],$this->error);
        }
    }

    public function tracking($order_id)
    {
        $user = Auth::user();
        $get_user = Order::where('user_id', $user->id)->get();
        if ($get_user) {
            $sending_request = Order::where([['id', $order_id], ['order_status', 'pending']])->get('created_at');
            $confirmed = Order::where([['id', $order_id], ['order_status', 'approve']])->get('updated_at');
            $shipper = Order::where([['id', $order_id], ['order_status', 'accept']])->with('driver')->get(['created_at', 'driver_id']);
            $shipping = Order::where([['id', $order_id], ['order_status', 'picked']])->get('updated_at');
            $delivered = Order::where([['id', $order_id], ['order_status', 'delivered']])->get('updated_at');
        }
        return response()->json([
            'sending_request' => $sending_request,
            'confirmed' => $confirmed,
            'shipper' => $shipper,
            'shipping' => $shipping,
            'delivered' => $delivered,
            'message' => 'Track Order',
            'status' => 'success',
        ],$this->success);
    }

}
