<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\UserQuote;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::count();
        $quotes = UserQuote::count();
        $users = User::where('type', 'User')->count();
        $user = User::where('type', 'User')->count();
        $drivers = User::where('type', 'Driver')->count();
        $today_quote = UserQuote::whereDate('created_at', Carbon::today())->with('product')->get();
        return view('admin/pages/index', ['products'=>$products, 'quotes'=>$quotes, 'today_quote'=>$today_quote, 'users'=>$users, 'drivers'=>$drivers]);
    }
    public function addProduct()
    {
        $data = Product::all();
        return view('admin/pages/addProduct',['data'=>$data]);
    }

    public function storeData(Request $request)
    {
        //Image
        if ($request->hasFile('image')) {
            //upload new file
            $extension = $request->image->extension();
            $filename = time() . "_." . $extension;
            $request->image->move(public_path('assets/images/productimages'), $filename);
            $request['image'] = $filename;
        }

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_model' => $request->product_model,
            'product_category' => $request->product_category,
            'product_image' => $filename,
            'product_short_description' => $request->short_description,
            'product_long_description' => $request->long_description
        ]);
        return back()->with('success','Product created successfully!');
    }

    public function feature(Request $request)
    {
        $id = $request->pro_id;
        $check = Product::where('id', $id)->first();
        if ($check->featured_product == 1) {
            $update = Product::where('id', $id)->update(['featured_product' => 0]);
            return back()->with('success','Product Successfully unFeatured!');
        }else{
            $update = Product::where('id', $id)->update(['featured_product' => 1]);
            return back()->with('success','Product Successfully Featured!');
        }
    }


    public function quote()
    {
        $quotes = UserQuote::with('product')->get();
        return view('admin/pages/quotes', ['quotes'=>$quotes]);
    }

    public function quote_detail(Request $request)
    {
        $quote = UserQuote::where('id', $request->id)->with('product')->first();
        return view('admin/pages/quotedetail', ['quote'=>$quote]);
    }

    public function most_purchase(Request $request)
    {
        $id = $request->pro_id;
        $check = Product::where('id', $id)->first();
        if ($check->purchased_item == 1) {
            $update = Product::where('id', $id)->update(['purchased_item' => 0]);
            return back()->with('success','Product Successfully Un-Most Purchased!');
        }else{
            $update = Product::where('id', $id)->update(['purchased_item' => 1]);
            return back()->with('success','Product Successfully Most Purchased!');
        }
    }

    public function user_list()
    {
        $user = User::where('type', 'User')->get();
        return view('admin/pages/user', ['user'=>$user]);
    }

    public function driver_list()
    {
        $driver = User::where('type', 'Driver')->get();
        return view('admin/pages/driver', ['driver'=>$driver]);
    }

    public function approve(Request $request)
    {
        User::where('id', $request->id)->update([
            'driver_approve' => 1,
        ]);
        return redirect('/admin/driver_list')->with('success','Driver Approve successfully!');
    }

    public function update(Request $request)
    {
        $input = $request->except('_token');
        $products = Product::find($request->id);
        if ($request->hasFile('product_image')) {

            //code for remove old file

            if ($products->product_image != null) {
                $url_path = parse_url($products->product_image, PHP_URL_PATH);
                $basename = pathinfo($url_path, PATHINFO_BASENAME);
                $file_old =  public_path("/assets/images/productimages/$basename");
                unlink($file_old);
            }
            //upload new file
            $extension = $request->product_image->extension();
            $filename = time() . "_." . $extension;
            $request->product_image->move(public_path('assets/images/productimages'), $filename);
            $input['product_image'] = $filename;
        }
        $update = Product::where('id', $request->id)->update($input);
        return back()->with('success','Product Updated successfully!');
    }

    public function delete(Request $request)
    {
        $update = Product::where('id', $request->id)->delete();
        return back()->with('error','Product Deleted successfully!');
    }

}

