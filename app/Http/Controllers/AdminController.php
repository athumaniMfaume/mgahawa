<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

        public function redirects(){
        $food = Food::all();
        $chef = chef::all();
        $order = order::all();
        $reservation = reservation::all();
        $chefs = chef::paginate(3);
        // dd($food);
     

        
            return view('admin.adminhome',compact('food','chef','order','reservation'));


    }


    public function user(){

        $data = User::where('usertype','!=','1')->get();
         return view('admin.users',compact('data'));
        // return response()->json($data);
    }

    public function deleteuser($id){

        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'User Deleted Successfully');
        // return response()->json(['message' => 'User deleted successfully']);
    }

    public function deletefood($id){

        $data = Food::find($id);
        $data->delete();
        return redirect()->route('foodTable')->with('success','Food deleted Successfully!');
    }

    public function updatefood($id){

        $data = Food::find($id);

        return view('admin.updatefood',compact('data'));
    }

    public function update(Request $request,$id){

        $data = Food::find($id);
        $request->validate([
            'title' => ['sometimes', 'regex:/^[A-Za-z\s]+$/'],
            'price' => 'sometimes',

            'description' => ['sometimes', 'regex:/^[A-Za-z\s]+$/'],
        ]);

        if (isset($request->image)) {
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('foodimage'), $imagename);
            $data->image = $imagename;
        }


        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        toastr()->addSuccess('Food Added Successfuly');
        
        return redirect()->route('foodTable')->with('success','Food Update Successfully!');


    }

    public function foodmenu(){

        $data = food::all();
        return view('admin.foodmenu',compact('data'));
        // return response()->json($data);
    }

    public function foodtable(){

        $data = food::paginate(5);
        return view('admin.foodtable',compact('data'));
    }

    public function uploadfood(Request $request){

        $data = new Food;
        $request->validate([
            'title' => ['required', 'regex:/^[A-Za-z\s]+$/'],
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'description' => ['required', 'regex:/^[A-Za-z\s]+$/'],
        ]);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('foodimage'), $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        toastr()->addSuccess('Food Added Successfuly');
        return redirect()->route('foodTable')->with('success','Food Added Successfully!');
    }

    public function reservation(Request $request){

        $data = new Reservation;
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Reservation::class],
            'phone' => 'required',
            'guest' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);

        $data->name =$request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        toastr()->addSuccess('Reservation Added Successfuly');
        return redirect()->back();
    }

    public function viewreservation(){

        $data = reservation::paginate(5);
        return view('admin.adminreservation',compact('data'));
    }

    public function viewchef(){

        $data = chef::paginate(5);
        return view('admin.adminchef',compact('data'));
    }

    public function addchef(Request $request){


        return view('admin.addchief');
    }

    public function postchef(Request $request){

        $data = new Chef;
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s]+$/'],
            'specialist' => ['required', 'regex:/^[A-Za-z\s]+$/'],
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',

        ]);

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('chefimage'), $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->specialist = $request->specialist;
        $data->save();
        toastr()->addSuccess('Chef Added Successfuly');
        return redirect()->route('chefTable')->with('success','Chef Added Successfully!');
    }

    public function deletechef($id){

        $data = Chef::find($id);
        $data->delete();
        return redirect()->route('chefTable')->with('success','Chef Deleted Successfully!');
    }

    public function updatechef($id){

        $data = Chef::find($id);

        return view('admin.updatechef',compact('data'));
    }

    public function postupdatechef(Request $request,$id){

        $data = Chef::find($id);
        $request->validate([
            'name' => ['sometimes', 'regex:/^[A-Za-z\s]+$/'],
            'specialist' => ['sometimes', 'regex:/^[A-Za-z\s]+$/'],
             'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        if (isset($request->image)) {
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move(public_path('chefimage'), $imagename);
            $data->image = $imagename;
        }


        $data->name = $request->name;
        $data->specialist = $request->specialist;
        $data->save();
        toastr()->addSuccess('Chef Updated Successfuly');
        return redirect()->route('chefTable')->with('success','Chef Updated Successfully!');


    }

    public function orders(){

        $data = Order::all();
        return view('admin.orders',compact('data'));
    }

    public function search(Request $request){

        $search = $request->search;
        $data = Order::where('name','like', '%'.$search.'%')
        ->orWhere('foodname','like', '%'.$search.'%')
        ->orWhere('address','like', '%'.$search.'%')
        ->get();


        return view('admin.orders',compact('data'));
    }
}
