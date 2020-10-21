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
        $user = new User();

        $user->id = "User451213";
        $user->password = bcrypt('password');
        $user->rol = 'EPS';
        $user->save();

        $eps = new Eps();
        $eps->name = 'Famisanar';
        $eps->address = 'Aquí';
        $eps->phone = '7504481';
        $eps->state = 'Cundinamarca';
        $eps->city = 'Bogotá';
        $eps->user = $user->id;
        $eps->save();
    }
}
