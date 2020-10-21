<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = new Person();
        $person->id = "1007228390";
        $person->name = "Kevin Esteven";
        $person->lastname = "Sanchez Gomez";
        $person->date_of_birth = "1999-08-01";
        $person->document_type = "CC";
        $person->save();
    }
}
