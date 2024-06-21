<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //  dd('Seeder running');

        DB::table('categories')->insert([
            [
            'name' => 'Programming',
            'slug' => 'programming',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'name' => 'Umum',
            'slug' => 'umum',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
            'name' => 'Diniyah',
            'slug' => 'diniyah',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
        ]);

        // dd('Data inserted');
    }
}
