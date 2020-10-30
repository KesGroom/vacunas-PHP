<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\Official;
use App\Models\Person;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Vvc;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficialController extends Controller
{
    public function crear(){
        $official = Official::all();
        return view('Eps.crear', compact('official'));

    }
    public function mostrar(){
        $official = Official::all();
        return view('Eps.mostrar', compact('official'));

    }
    public function usu(Request $request){
  
  
      
        $user = new User();
        $user->username=$request->username;
        $user->password=bcrypt($request->password);
        $user->rol='Funcionario';
        $user->save();
        $eps = Eps::where('user',Auth::user()->id)->first();

        $official = new Official();
        $official->email=$request->email;
        $official->phone=$request->phone;
        $official->address=$request->address;
        $official->profession=$request->profession;
        $official->position=$request->position;
        $official->id=$request->id;
        $official->user=$user->id;
        $official->eps_id=$eps->id;
        $official->save();
        $official = Official::all();
        return view('Eps.mostrar', compact('official'));

    }
}
