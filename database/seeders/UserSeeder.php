<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Larbi Gouzal',
            'email' => 'a@a.a',
        ]);
        User::factory()
        ->count(10)
        //->hasShippingCompany(1)
        ->create();
    }
}
