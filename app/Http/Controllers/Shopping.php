<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; //to save data when moving from a page to another
use Illuminate\Support\Facades\Cookie;
use Illuminate\App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class Shopping extends Controller
{

    public function ShowTrending()
    {
        return view('welcome');
    }


    public function Shopping(Request $request)
    {
        $products = DB::table('products')->get();
        return view('welcome', ['products' => $products]);
    }


    public function GetChairsList()
    {
        $title = strtolower('Chair');
        $products = Product::where('title', $title)->get();
        return view('shopping.chairs', compact('products', 'title'));
    }

    public function ShowDetails($id)
    {

        $products = DB::table('products')
            ->where('id', $id)
            ->first();
        $tax = 0.15;
        $descount = 10;
        $products->total = $products->price * $tax + $products->price;
        $products->tax = $tax;
        $products->descount = 10;
        $products->net = $products->total - $products->descount;
        return view('shopping.details', compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        $userid = $request->user()->id;
        $products = DB::table('products')
            ->where('id', $id)
            ->first();
        $tax = 0.15;
        $descount = 10;
        $products->total = $products->price * $tax + $products->price;
        $products->tax = $tax;
        $products->descount = 10;
        $products->net = $products->total - $products->descount;

        $row = [
            'title' => $products->title,
            'product_code' => $products->product_code,
            'price' => $products->price,
            'tax' => $products->tax,
            'total' => $products->total,
            'discount' => $products->descount,
            'user_id' => $userid,
            'Net' => $products->net,
        ];

        DB::table('carts')->insert($row);
        $count = DB::table('carts')->where('user_id', $userid)->count();
        Session::put('count', $count);
        return redirect()->back();

    }
    public function ShowCart()
    {
        $cartItems = DB::table('carts')
                    ->join('products', 'carts.product_code', '=', 'products.product_code')
                    ->select('carts.*', 'products.image')
                    ->get();
        return view('shopping.usercart', ['cartItems' => $cartItems]);
    }

    public function deleteCartItemForUser($id)
    {
        $cartuser = Cart::findOrFail($id);
        $cartuser->delete();
        return redirect('/shopping/carts')->with('success', 'Item deleted successfully!');
    }




    //test to read data from api
    public function GetCoffeHot()
    {

        $response = Http::get('https://api.sampleapis.com/coffee/hot');
        /* return Response()->json([
            'response' =>$response ->object()  //to call api data, or user body() but object is better
        ]); */

        $response = Http::get('https://api.sampleapis.com/coffee/hot');
        return view('shopping.cafe', ['data' => $response->object()]);      // to read data in specific page

    }

    // call api by specific paramiter 'email for example'

    public function GetUsersAPI()
    {
        $apiURL = 'https://jsonplaceholder.typicode.com/users';
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $response = Http::withHeaders($headers)->get($apiURL, [
            'email' => 'Sincere@april.biz',
        ]);
        $data = $response->json();
        return Response()->json($data);

    }
}
