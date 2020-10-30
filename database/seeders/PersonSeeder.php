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
        $person->id = "1003746955";
        $person->name = "Julian Santiago";
        $person->lastname = "Garavito Rozo";
        $person->date_of_birth = "2001-06-28";
        $person->document_type = "CC";
        $person->save();
    }
}
