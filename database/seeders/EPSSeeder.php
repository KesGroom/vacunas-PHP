<?php

namespace Database\Seeders;

use App\Models\Eps;
use App\Models\User;
use Database\Factories\EPSFactory;
use Illuminate\Database\Seeder;

class EPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(6)->create([
            'rol' => 'EPS',
        ]);

        $users = User::all();
        $users->each(function($user){
            Eps::factory(1)->create([
                'user' => $user->id
            ]);
        });
    }
}
