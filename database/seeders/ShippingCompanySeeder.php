<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShippingCompany;
class ShippingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ShippingCompany::factory()
            ->count(3)
            //->hasPosts(1)
            ->create();
    }
}
