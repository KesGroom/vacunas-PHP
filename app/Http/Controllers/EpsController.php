<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\User;
use Illuminate\Http\Request;

class EpsController extends Controller
{
    public function create(){
        $eps = Eps::all();
        return view('User.index2', compact('eps'));

    }
 

    public function store(Request $request){
        /*$validacion = $request->validate([
            'id'=>'required|unique:users',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
            'username' => 'required',
            'password' => 'required',

        ]);*/
        $user = new User();
        $user->username=$request->username;
        $user->password=bcrypt($request->password);
        $user->rol='EPS';
        $user->save();

        $eps = new Eps();
        $eps->name=$request->name;
        $eps->address=$request->address;
        $eps->phone=$request->phone;
        $eps->state=$request->state;
        $eps->city=$request->city;
        $eps->user = $user->id;
        
        $eps->save();
        
        return view('welcome');

       
    }
}
