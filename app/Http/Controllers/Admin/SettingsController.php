<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;

use App\Models\SiteSetting;

class SettingsController extends Controller
{
    public function index(){
        $site_settings = SiteSetting::first(); // -> pirmas ID kur pagr nustatymai
        return view('admin.settings.index', compact('site_settings'));
    }
    public function update(Request $request)
    {
        $db = SiteSetting::firstOrFail();

        $data = $request->validate([
                'site_name'         => 'required|string|max:255',
                'meta_title'        => 'required|string|max:255',
                'meta_description'  => 'required|string|max:500',

                'heading_1'         => 'required|string|max:500',
                'heading_2'         => 'required|string|max:500',
                'heading_3'         => 'required|string|max:500',

                'footer_text'       => 'required|string|max:1000',

                'phone'             => 'required|string|max:50',
                'email'             => 'required|email|max:255',

                'city'              => 'required|string|max:255',
                'country'           => 'required|string|max:255',
                'address'           => 'required|string|max:255',

                'working_hours'     => 'required|string|max:255',

                'facebook'          => 'required|url|max:255',
                'instagram'         => 'required|url|max:255',
                'tiktok'            => 'required|url|max:255',

                'logo'              => 'nullable|file|mimetypes:image/png,image/svg+xml,image/jpeg,image/webp',
        ]);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logo', 'public');
            $data['logo_path'] = $path;
        }

        $db->update($data);     
        
        Cache::forget('site_settings');

        return redirect()->back()->with('success', 'Nustatymai atnaujinti');
    }

}
