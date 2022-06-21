<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function user(){
        $data=User::all();
        return view('admin.user', compact("data"));
    }

    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function product(){
        return view('admin.addproduct');
    }
    
    public function uploadproduct(Request $request){
        $data = new product();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('productimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->genre = $request->genre;
        $data->pegirate = $request->pegirate;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function update(){
        $data=product::all();
        return view('admin.viewproduct', compact("data"));
    }

    public function deleteproduct($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateproduct($id){
        $data=product::find($id);
        return view("admin.updateproduct", compact("data"));
    }

    public function updateproductitem(Request $request, $id){
        $data=product::find($id);
        $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('productimage',$imagename); 
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->genre = $request->genre;
        $data->pegirate = $request->pegirate;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();  
    }

    public function updategenre($id){
        $data=product::find($id);
        return view("admin.updatenewgenre", compact("data"));
    }

    public function updatenewgenre(Request $request, $id){
        $data=product::find($id);
        $data->genre = $request->genre;
        $data->save();
        return redirect('/update');
    }

}
