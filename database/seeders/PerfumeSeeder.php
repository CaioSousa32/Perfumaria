<?php

namespace Database\Seeders;

use App\Models\Perfume;
use App\Models\User;
use Faker\Provider\ar_EG\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 50; $i++) {
            Perfume::factory()->create([
                'user_id' => User::all()->random()->id
            ]);
        }
    }
}
