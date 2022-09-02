<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\UserQuote;

class BasicController extends Controller
{
    public function home()
    {
        $feature = Product::where('featured_product', 1)->take(4)->get();
        $purchase = Product::where('purchased_item', 1)->take(4)->get();
        return view('welcome', ['feature'=>$feature, 'purchase'=>$purchase]);
    }

    public function shop(Request $request)
    {
        $name = $request->category;
        if ($name != null) {
            $data = Product::where('product_category', $name)->get();
            return view('shop', ['data'=>$data]);
        }else {
            $data = Product::get();
            return view('shop', ['data'=>$data]);
        }
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contact-us');
    }

    public function product_details(Request $request)
    {
        $data = Product::where('id', $request->id)->get();
        return view('product_details', ['data'=>$data]);
    }

    public function sendQuote(Request $request)
    {
        $quote = UserQuote::create([
            'product_id' => $request->product_id,
            'username' => $request->username,
            'email' => $request->email,
            'company' => $request->company,
            'contact' => $request->number,
            'country' => $request->country,
            'address' => $request->address,
            'enquiry' => $request->enquiry,
        ]);

        return view('Successmessage', ['id'=> $request->product_id]);    
    }

}
