<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SiteSetting;

class SettingsController extends Controller
{
    public function index(){
        $site_settings = SiteSetting::first(); // -> pirmas ID kur pagr nustatymai
        return view('admin.settings.index', compact('site_settings'));
    }
}
