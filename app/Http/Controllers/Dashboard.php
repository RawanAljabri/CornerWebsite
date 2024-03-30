<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; //to save data when moving from a page to another
use Illuminate\Support\Facades\Cookie;
use Validator;//

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


    public function GetProduct(Request $request)
    {
        $products = Product::when($request->has('search'), function ($query) use ($request) {
            return $query->where('title', 'like', '%' . $request->search . '%')->get();
        }, function ($query) {
            return $query->get();
        });

        return view('dashboard.products', ['products' => $products]);
    }


    public function CreateProduct(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required| max:100',
            'price' => 'required|numeric|min:0',
            'product_code' => 'required|unique:products',
            'description' => 'required|max:255',
        ]);

        $product = Product::create($validatedData);
        return redirect('/dashboard/products')->with('success', 'Product added successfully!');
    }


    public function Del($id)
    {
        Session::put('del', 'Done!');
        $products = Product::find($id);
        $products->delete();
        return redirect('/dashboard/products')->with('success', 'Product deleted successfully!');
    }
    public function Edit($id)
    {
        $products = Product::find($id);
        return view('dashboard.edit', ['products' => $products]);
    }
    public function Update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required| max:100',
            'price' => 'required|numeric|min:0',
            'product_code' => 'required|unique:products,product_code,' . $request->id,
            'description' => 'required| max:255',
        ]);

        $product = Product::findOrFail($request->id);
        $product->update($validatedData);

        return redirect('dashboard/products')->with('success', 'Product updated successfully!');
    }

}
