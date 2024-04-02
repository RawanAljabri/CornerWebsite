<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session; //to save data when moving from a page to another
use Illuminate\Support\Facades\Cookie;
use Illuminate\App\Http\Controllers;
class Shopping extends Controller
{
   
    public function ShowTrending() {
        return view('welcome');
    }


    public function GetProducts(Request $request) {
        $products = DB::table('products')->get();
        return view('welcome', ['products' => $products]);
    }

    
    public function addToCart(Request $request, $id){
     $userid = $request-> user()->id; //get current user id
     $data= DB::table('products')->where('products.id','=',$id)-> get();
/*      -> join('product_details','products.id','=', 'product_details')
 */

 dd($data);

    }
}
