<?php

namespace App\Http\Controllers;

use App\Models\cartshop;
use App\Models\product;
use App\Models\shopcart;
use App\Models\shopshopcart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homepagecontroller extends Controller
{

    public function homepage(){
        return view('homepage');
    }

    public function about(){
        return view('aboutus');
    }

    public function shoppage(){
        $data=product::all();
        return view('shop', compact("data"));
    }

    public function adminhome(){
        $data=product::all();
        $usertype= Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminpage');
        }else{
            $user_id=Auth::id();
            return view('homepage', compact("data"));
        }
    }

    public function detailproduct($id){
        $data=product::find($id);
        return view("detailproductview", compact("data"));
    }

    public function addcart(Request $request, $id){
        if(Auth::id()){
            $user_id=Auth::id();
            $productid=$id;
            $quantity=$request->quantity;
            
            //new variable
            $cartshop=new cartshop();
            $cartshop->user_id=$user_id;
            $cartshop->product_id=$productid;
            $cartshop->quantity=$quantity;
            $cartshop->save();

            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }

    public function cartviewpage(){
        // $data=cartshop::where('user_id', $id)->join('products', 'cartshops.product_id', '=', 'product.id')->get();
        return view('showcartpage');    
    }
}
