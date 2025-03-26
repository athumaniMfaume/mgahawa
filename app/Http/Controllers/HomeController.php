<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $chefs = chef::paginate(3);
        $count = Cart::all()->count();
        return view('home',compact('count','data','chefs'));
    }

        public function home(){
        $data = food::all();
        $chefs = chef::paginate(3);
        $count = Cart::all()->count();
        return view('home',compact('count','data','chefs'));
    }



    public function addcart(Request $request,$id){

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $food_id = $id;
            $quantity = $request->quantity;

            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();
            
            toastr()->timeOut(10000)->closeButton()->addSuccess('Cart Added Successfuly');
            return redirect()->back();
        }

        else {
            return redirect('/login');
        }

    }

    public function showcart(Request $request,$id){
        // $data = food::all();
        // $chef = chef::all();
        $count = Cart::where('user_id',$id)->count();
        $data = Cart::where('user_id', $id)->with(['food', 'user'])->get();

        return view('showcart',compact('count','data'));
    }

    public function deletecart($id){

        $data = Cart::find($id);
        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Cart Delete Successfuly');
        return redirect()->back();
    }

    public function orderconfirm(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

      foreach ($request->foodname as $key => $foodname) {

        $data = new Order;
        $data->foodname = $foodname;  
        $data->price = $request->price[$key]; 
        $data->quantity = $request->quantity[$key]; 
        $data->name = $request->name; 
        $data->phone = $request->phone; 
        $data->address = $request->address; 

        if($data->save()){
                  $userid = Auth::user()->id;

      $cart_remove = Cart::where('user_id',$userid)->get();

            foreach ($cart_remove as $remove) {
                
                $data = Cart::find($remove->id);
            
                $data->delete();
            }

             toastr()->timeOut(10000)->closeButton()->addSuccess('Order Confirmed Successfuly');



      return redirect()->back();
                               
      }


    }
     }


}
