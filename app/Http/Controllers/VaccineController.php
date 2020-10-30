<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function create(){
        $vacuna = Vaccine::all();
        return view('User.index', compact('vacuna'));
    }
    public function mostrar(){
        $vacunas = Vaccine::all();
        return view('Eps.vacunas', compact('vacunas'));
    }
    public function store(Request $request){
        $vaccines = Vaccine::where("id", $request);
        return view('/',compact('vaccines'));
    }
    public function index(Request $request){
        $query = trim($request->get('search'));
        
        if ($request) {
            $query = trim($request->get('search'));
            $vacuna = Vaccine::where('vvc_id', 'LIKE' ,'%' . $query . '%')
            ->orderby('vvc_id','asc')
            ->get();
            return view('User.vacunas',['vacuna' => $vacuna, 'search' => $query]);
        }
    }
}

