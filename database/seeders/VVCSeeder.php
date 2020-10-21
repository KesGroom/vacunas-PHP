<?php

namespace Database\Seeders;

use App\Models\Official;
use App\Models\Person;
use App\Models\User;
use App\Models\Vvc;
use Illuminate\Database\Seeder;

class VVCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persons = Person::all();

        $persons->each(function($person){
            Vvc::factory(1)->create([
                'id'=> $person->id
            ]);
        });
    }
}
