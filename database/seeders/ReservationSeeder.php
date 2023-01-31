<?php

namespace Database\Seeders;

use App\Models\ReservationList;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReservationList::factory()->count(12)->create();
    }
}
