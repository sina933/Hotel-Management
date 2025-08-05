<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Room;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index(){
        if(Auth::id()){

            $user_type=Auth()->user()->user_type;

            if($user_type=='user'){

                $room=Room::all();

                return view('home.index',compact('room'));
            }
            else if($user_type=='admin'){

                return view('admin.index');
            }
            else{
                return redirect()->back();
            }

        }

    }

    public function home(){
        $room=Room::all();

        return view('home.index',compact('room'));
    }

    public function create_room(){

        return view('admin.create_room');
    }

    public function add_room(Request $request){

        $data= new Room;

        $data->room_title=$request->title;

        $data->description=$request->description;

        $data->price=$request->price;

        $data->wifi=$request->wifi;

        $data->room_type=$request->type;

        $image=$request->image;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room',$imagename);

            $data->image=$imagename;

        }

        $data->save();

        return redirect()->back();




    }

    public function view_room(){

        $data=Room::all();

        return view('admin.view_room',compact('data'));
    }

    public function room_delete($id){

        $delete=Room::find($id);

        $delete->delete();

        return redirect()->back();

    }

    public function room_update($id){

        $data=Room::find($id);

        return view('admin.update_room',compact('data'));
    }

    public function edit_room(Request $request,$id){

        $data=Room::find($id);

        $data->room_title=$request->title;

        $data->description=$request->description;

        $data->price=$request->price;

        $data->wifi=$request->wifi;

        $data->room_type=$request->type;

        $image=$request->image;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room',$imagename);

            $data->image=$imagename;

        }

        $data->save();

        return redirect()->back();



    }

    
    
}
