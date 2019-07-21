<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_to_cart($product,$category)
    {
        $user = auth()->user();
        if(Auth::check())
        {
            // $category = Product::find($product);
            // $category = $category->prod_category;
            $cart = new Cart();
            $cart->cart_id = 0;
            $cart->prod_id = $product;
            $cart->cust_id = $user->id;
            $cart->save();
            return redirect("/category/$category");
        }
        else{
            return redirect("/login");
        }
            
    }
    public function show_cart()
    {
        $user = auth()->user();
        // dd($user);
        $list = array();
        if(Auth::check())
        {

            $product_ids = DB::table('carts')->select('prod_id') ->where('cust_id', $user->id)->get();
            // dd($product_ids);
            foreach($product_ids as $product_id){
                    // var_dump();
                    $temp = DB::table('products')->select('prod_id','prod_name','prod_price','prod_category') ->where('prod_id', $product_id->prod_id)->get();
                    
                    array_push($list, $temp);

            }
            return view('UI.cart')->with('products',$list);
        }
        else{
            return redirect("/login");
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
