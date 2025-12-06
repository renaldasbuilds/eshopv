<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::firstOrCreate([
            'title' => 'Balta',
            'slug'  => 'balta',
            'description' => 'Tiesiog balta spalva',
            'hex_code'    => '#ffffff',
            'is_active'   => true,
            'sort_order'  => 0,
        ]);
    }   
}
