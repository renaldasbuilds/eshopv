<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'meta_title',
        'meta_description',
        'header_top',
        'hero_text',
        'logo_path',
        'heading_1' , 
        'heading_2' , 
        'heading_3',
        'footer_text',
        'phone' , 'email' , 'address' , 'city' , 'country',
        'working_hours',
        'facebook' , 'instagram' , 'tiktok',  // socials
    ];
}

