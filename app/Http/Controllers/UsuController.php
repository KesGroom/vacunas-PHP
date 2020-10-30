<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuController extends Controller
{
    public function store(Request $request){
        $validacion = $request->validate([
            'id'=>'required|unique:users',
            'username' => 'required',
            'password' => 'required',
                 
        ]);
        $user = new User();
        $user->username=$validacion['username'];
        $user->password=bcrypt($validacion['password']);
        $user->rol='EPS';
        $user->save();
        }
}
