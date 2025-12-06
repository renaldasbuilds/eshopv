<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Material;


class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::firstOrCreate([
            'title' => 'Stiklo kristalas',
            'description' => 'tai specialiai apdirbtas stiklas, kuris šlifuojamas taip, kad atrodytų kaip tikras kristalas. Dažnai į jį pridedama švino oksido, kad būtų didesnis blizgesys, skaidrumas ir spalvų žaismas. Tai nėra natūralus mineralas, bet vizualiai gali būti labai panašus į brangakmenius ir yra gerokai pigesnis',
            'is_active'  => true,
            'sort_order' => 0
        ]);
    }
}
