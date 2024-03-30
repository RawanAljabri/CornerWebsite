<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; //to save data when moving from a page to another
use Illuminate\Support\Facades\Cookie; //

class Dashboard extends Controller
{
    // اجبار لتسجيل الدخول
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    public function Index(Request $request)
    {
        /*         Session::put('data', 'Welcome, admin!');
                $user= $request->User()->email; */
        /* Cookie::queue('A','HI COOKIES',60);
        $user= $request->User()->email; */
        /*         return view('dashboard.index');
         */
        return view('dashboard.index');
    }
    public function Search(Request $request)
    {
        $products = Product::where('title', 'like', '%' . $request->search . '%')->get();
        return view('dashboard.products', compact('products'));
    }
    public function GetProduct()
    {
        $products = Product::all();
        return view('dashboard.products', ['products' => $products]);
    }
    public function CreateProduct(Request $request)
    {
        $products = Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'product_code' => $request->product_code,
            'description' => $request->description,
            //'photo' => $request->photo,
        ]);
        $products->save();
        return redirect('/dashboard/products')->with('success','Product added successfully!');
    }
    public function Del($id)
    {
        Session::put('del','Done!');
        $products = Product::find($id);
        $products->delete();
        return redirect('/dashboard/products')->with('success','Product deleted successfully!');
    }
    public function Edit($id)
    {
        $products = Product::find($id);
        return view('dashboard.edit', ['products' => $products]);
    }
    public function Update(Request $request)
    {
        $products = Product::where('id', $request->id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'product_code' => $request->product_code,
            'description' => $request->description,
            //'photo' => $request->photo,
        ]);
        return redirect('dashboard/products')->with('success','Product updated successfully!');
    }

}
