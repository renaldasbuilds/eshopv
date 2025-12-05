<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SiteSetting;


class SiteSettingsSeeder extends Seeder
{
    /**
     * SiteSettingsSeeder
     */
    public function run(): void
    {
        SiteSetting::firstOrCreate([
            'site_name'        => 'Puslapio pavadinimas',
            'logo_path'        => 'null',
            'header_top'       => 'nera',
            'heading_1'        => 'nera',
            'heading_2'        => 'nera',
            'heading_3'        => 'nera',
            'meta_title'       => 'Puslapio meta title',
            'meta_description' => 'Puslapio meta description',
            'hero_text'        => 'hero sekcijos text',
            'footer_text'      => 'footerio tekstas',
            'phone'            => '+370...',
            'email'            => 'test@gmail.com',
            'city'             => 'Utena',
            'country'          => 'Lithuania',
            'working_hours'    => 'I-V 9-17',
            'facebook'         => 'facebook-url',
            'instagram'        => 'instagram-url',
            'tiktok'           => 'tiktok-url'
 
        ]);
    }
}
