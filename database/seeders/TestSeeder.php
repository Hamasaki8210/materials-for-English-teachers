<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hamasaki;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hamasaki::create([
            'id' => 2,
            'test' => 'hamasaki',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
