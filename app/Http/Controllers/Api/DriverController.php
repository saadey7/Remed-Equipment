<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\NotificationUser;
use App\Models\User;
use Carbon\Carbon;
use DB;
class DriverController extends Controller
{
    public $success = 200;
    public $error = 404;
    public $validate_error = 401;

    public function show_order()
    {
        $user = Auth::user();
        $get_order = Order::count();
        if ($get_order == 0) {
            return response()->json([
                'message' => 'No Orders',
                'status' => 'success',
            ], $this->success);
        } else {
            $latitude = $user->latitude;
            $longitude = $user->longitude;
            $get_user = Order::where([['driver_id', $user->id], ['order_status', 'reject']])->get();
            if ($get_user->isNotEmpty()) {
                $order =   Order::with(['user', 'product'])
                    ->select("*", \DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                    * cos(radians(orders.latitude)) 
                    * cos(radians(orders.longitude) - radians(" . $longitude . ")) 
                    + sin(radians(" .$latitude. ")) 
                    * sin(radians(orders.latitude))) AS distance"))
                    ->having('distance', '<', 10)
                    ->where('orders.order_status', 'approve')
                    ->get();
                return response()->json([
                    'order' => $order,
                    'message' => 'Orders',
                    'status' => 'success',
                ], $this->success);
            }else {
                $order =   Order::with(['user', 'product'])->select("*", \DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                    * cos(radians(orders.latitude)) 
                    * cos(radians(orders.longitude) - radians(" . $longitude . ")) 
                    + sin(radians(" .$latitude. ")) 
                    * sin(radians(orders.latitude))) AS distance"))
                    ->having('distance', '<', 10)
                    ->where('orders.order_status', 'approve')
                    ->orWhere('orders.order_status', 'reject')
                    ->get();

                return response()->json([
                    'order' => $order,
                    'message' => 'Orders',
                    'status' => 'success',
                ], $this->success);
            }
        }
        
        
    }

    public function new_order()
    {
        $user = Auth::user();
        $latitude = $user->latitude;
        $longitude = $user->longitude;
        $get_user = Order::where([['driver_id', $user->id], ['order_status', 'reject']])->get();
        if ($get_user->isNotEmpty()) {
            $order =   Order::with(['user', 'product'])
                ->select("*", \DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                * cos(radians(orders.latitude)) 
                * cos(radians(orders.longitude) - radians(" . $longitude . ")) 
                + sin(radians(" .$latitude. ")) 
                * sin(radians(orders.latitude))) AS distance"))
                ->having('distance', '<', 10)
                ->where('orders.order_status', 'approve')
                ->whereDate('created_at', Carbon::today())
                ->get();
            return response()->json([
                'order' => $order,
                'message' => 'Orders',
                'status' => 'success',
            ], $this->success);
        }else {
            $order =   Order::with(['user', 'product'])->select("*", \DB::raw("6371 * acos(cos(radians(" . $latitude . "))
                * cos(radians(orders.latitude)) 
                * cos(radians(orders.longitude) - radians(" . $longitude . ")) 
                + sin(radians(" .$latitude. ")) 
                * sin(radians(orders.latitude))) AS distance"))
                ->having('distance', '<', 10)
                ->where('orders.order_status', 'approve')
                ->orWhere('orders.order_status', 'reject')
                ->whereDate('created_at', Carbon::today())
                ->get();

            return response()->json([
                'order' => $order,
                'message' => 'Orders',
                'status' => 'success',
            ], $this->success);
        }
    }

    public function accept_order($id)
    {
        $user = Auth::user();
        $check_status = Order::where([['driver_id', $user->id], ['order_status', 'reject']])->get();
        if ($check_status->isNotEmpty()) {
            $get_order = Order::where([['order_status', 'approve'], ['id', $id]])->first();
            if ($get_order == []) {
                return response()->json([
                    'message' => 'No Order Against This ID',
                    'status' => 'success',
                ], $this->success);
            }else {
                $order = Order::where([['order_status', 'approve'], ['id', $id]])->update([
                    'order_status' => 'accept',
                    'driver_id' => $user->id,
                ]);
                $message = "Order Accepted";
                $data_array = [
                    'title' => 'Order Accepted',
                    'body' => $message,
                    'type' => 'accept',
                    'user' => $user,
                    'id' => $get_order->id,
                    'description' => $message
                ];
                $user->sendNotification($get_order->user_id, $data_array, $message);
                $notify = NotificationUser::create([
                    'user_id' => $user->id,
                    'send_to' => $get_order->user_id,
                    'message' => $message,
                    'title' => 'Order Accepted',
                    'type' => "accept",
                    'redirect' => $get_order->id
                ]);
                return response()->json([
                    'message' => 'Order Accepted',
                    'status' => 'success',
                ], $this->success);
            }
        }
        $get_order = Order::where([['order_status', 'approve'], ['id', $id]])->orWhere('order_status', 'reject')->first();
        if ($get_order == []) {
            return response()->json([
                'data' => $get_order,
                'message' => 'No Order Against This ID',
                'status' => 'success',
            ], $this->success);
        }else {
            $order = Order::where([['order_status', 'approve'], ['id', $id]])->orWhere('order_status', 'reject')->update([
                'order_status' => 'accept',
                'driver_id' => $user->id,
            ]);
            $message = "Order Accepted";
            $data_array = [
                'title' => 'Order Accepted',
                'body' => $message,
                'type' => 'accept',
                'user' => $user,
                'id' => $get_order->id,
                'description' => $message
            ];
            $user->sendNotification($get_order->user_id, $data_array, $message);
            $notify = NotificationUser::create([
                'user_id' => $user->id,
                'send_to' => $get_order->user_id,
                'message' => $message,
                'title' => 'Order Accepted',
                'type' => "accept",
                'redirect' => $get_order->id
            ]);
            return response()->json([
                'message' => 'Order Accepted',
                'status' => 'success',
            ], $this->success);
        }
        
    }

    public function reject_order($id)
    {
        $user = Auth::user();
        $get_order = Order::where([['order_status', 'approve'], ['id', $id]])->first();
        if ($get_order == []) {
            return response()->json([
                'message' => 'No Order Against This ID',
                'status' => 'success',
            ], $this->success);
        }else {
            $order = Order::where([['order_status', 'approve'], ['id', $id]])->update([
                'order_status' => 'reject',
                'driver_id' => $user->id,
            ]);
            return response()->json([
                'message' => 'Order Rejected',
                'status' => 'success',
            ], $this->success);
        }
    }

    public function my_order()
    {
        $user = Auth::user();
        $active_order = Order::where([['driver_id', $user->id], ['order_status', 'accept']])->with(['user', 'product'])->get();
        $delivered_order = Order::where([['driver_id', $user->id], ['order_status', 'delivered']])->with(['user', 'product'])->get();
        return response()->json([
            'active_order' => $active_order,
            'delivered_order' => $delivered_order,
            'message' => 'Order List',
            'status' => 'success',
        ], $this->success);
    }

    public function order_pick($id)
    {
        $user = Auth::user();
        $get_order = Order::where([['order_status', 'accept'], ['id', $id]])->first();
        if ($get_order == []) {
            return response()->json([
                'message' => 'No Order Against This ID',
                'status' => 'success',
            ], $this->success);
        }else {
            $order = Order::where([['order_status', 'accept'], ['id', $id]])->update([
                'order_status' => 'picked',
                'driver_id' => $user->id,
            ]);
            $message = "Order Picked";
            $data_array = [
                'title' => 'Order Picked',
                'body' => $message,
                'type' => 'picked',
                'user' => $user,
                'id' => $get_order->id,
                'description' => $message
            ];
            $user->sendNotification($get_order->user_id, $data_array, $message);
            $notify = NotificationUser::create([
                'user_id' => $user->id,
                'send_to' => $get_order->user_id,
                'message' => $message,
                'title' => 'Order Picked',
                'type' => "picked",
                'redirect' => $get_order->id
            ]);
            return response()->json([
                'message' => 'Order Picked',
                'status' => 'success',
            ], $this->success);
        }
    }

    public function order_delivered($id)
    {
        $user = Auth::user();
        $get_order = Order::where([['order_status', 'picked'], ['id', $id]])->first();
        if ($get_order == []) {
            return response()->json([
                'message' => 'No Order Against This ID',
                'status' => 'success',
            ], $this->success);
        }else {
            $order = Order::where([['order_status', 'picked'], ['id', $id]])->update([
                'order_status' => 'delivered',
                'driver_id' => $user->id,
            ]);
            $message = "Order Delivered";
            $data_array = [
                'title' => 'Order Delivered',
                'body' => $message,
                'type' => 'delivered',
                'user' => $user,
                'id' => $get_order->id,
                'description' => $message
            ];
            $user->sendNotification($get_order->user_id, $data_array, $message);
            $notify = NotificationUser::create([
                'user_id' => $user->id,
                'send_to' => $get_order->user_id,
                'message' => $message,
                'title' => 'Order Delivered',
                'type' => "delivered",
                'redirect' => $get_order->id
            ]);
            return response()->json([
                'message' => 'Order Delivered',
                'status' => 'success',
            ], $this->success);
        }
    }

}