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
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index(){
        $personas = Person::all(); 
        return view('Persons.index',compact('personas'));

    }
    public function carnet(){
        $carnet = Vvc::all(); 
        return view('Persons.carnet',compact('carnet'));

    }
    public function create(){
        $vacunas = Vaccine::all();
        return view('Persons.vacunas', compact('vacunas'));
    }
    public function registro(){
        $create = Vaccine::all();
        return view('Persons.create', compact('create'));

    }

    public function store(Request $request){
        $validacion = $request->validate([
            'id' => 'required|unique:Persons',
            'name' => 'required',
            'lastname' => 'required',
            'date_of_birth' => 'required',
            'document_type' => 'required',
            'scanned_image' => 'required',
            'no_civil_registry' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'name_responsible' => 'required',
            'address_responsible' => 'required',
            'city_responsible' => 'required',
            'institution_name' => 'required',
            'age_patient' => 'required',
            'name_vaccine' => 'required',
            'dose_vaccine' => 'required',
            'application_date' => 'required',
            'laboratory' => 'required',
            'batch_number' => 'required',
            'IPS' => 'required',
            'reinforcement' => 'required',
          

        ]);

        $personas = new Person();
        $personas->id = $validacion['id']; 
        $personas->name = $validacion['name']; 
        $personas->lastname = $validacion['lastname']; 
        $personas->date_of_birth= $validacion['date_of_birth']; 
        $personas->document_type= $validacion['document_type']; 
        $personas->save();

        $carnet = new Vvc();
        $carnet->scanned_image = $validacion['scanned_image'];
        $carnet->no_civil_registry = $validacion['no_civil_registry'];
        $carnet->gender = $validacion['gender'];
        $carnet->weight = $validacion['weight'];
        $carnet->name_responsible = $validacion['name_responsible'];
        $carnet->address_responsible = $validacion['address_responsible'];
        $carnet->city_responsible = $validacion['city_responsible'];
        $carnet->institution_name = $validacion['institution_name'];
        $carnet->id = $validacion['id'];
        $official = DB::table('officials')->select('id')
        ->where('user', auth()->id())
        ->first(); 
        $carnet->official_id = $official->id;
        $carnet->save();
        
        $vacunas = new Vaccine(); 
        $vacunas->age_patient = $validacion['age_patient'];
        $vacunas->name_vaccine = $validacion['name_vaccine'];
        $vacunas->dose_vaccine = $validacion['dose_vaccine'];
        $vacunas->application_date = $validacion['application_date'];
        $vacunas->laboratory = $validacion['laboratory'];
        $vacunas->batch_number = $validacion['batch_number'];
        $vacunas->IPS = $validacion['IPS'];
        $vacunas->reinforcement = $validacion['reinforcement'];
        $officialUser = DB::table('officials')->select('id')
        ->where('user', auth()->id())
        ->first(); 
        $vacunas->official_id = $officialUser->id;
        $vacunas->vvc_id = $validacion['id'];
        $vacunas->save();
        $personas = Person::all(); 
        return view('Persons.index',compact('personas'));
    }
}
