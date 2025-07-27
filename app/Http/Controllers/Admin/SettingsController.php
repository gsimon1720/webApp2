<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SettingsController extends Controller
{
    public function index(){

        $setting = Settings::all()->pluck('value','key')->toArray();
        return view('admin.settings',compact('setting'));
    }

    public function update(Request $request)
{
    // Validation
    $request->validate([
        'site_name' => 'required|string|max:255',
        'site_description' => 'nullable|string',
        'site_keywords' => 'nullable|string',
        'site_author' => 'nullable|string',
        'site_email' => 'required|email',
        'site_phone' => 'nullable|string|max:20',
        'site_address' => 'nullable|string|max:255',
        'site_google_analytics' => 'nullable|string',
        'site_google_map' => 'nullable|string',
        'site_google_map_key' => 'nullable|string',
        'site_currency' => 'nullable|string|max:10',
        'site_copyright' => 'nullable|string|max:255',
        'facebook_link' => 'nullable|url',
        'twitter_link' => 'nullable|url',
        'linkedin_link' => 'nullable|url',
        'instagram_link' => 'nullable|url',
        'maintenance_mode' => 'required|in:0,1',
        'maintenance_mode_text' => 'nullable|string|max:255',
        'site_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
        'site_favicon' => 'nullable|image|mimes:ico,png,jpg|max:512',
    ]);

    // Loop through each input and update settings
    foreach ($request->except(['_token', 'site_logo', 'site_favicon']) as $key => $value) {
        DB::table('settings')->updateOrInsert(
            ['key' => $key],
            ['value' => $value]
        );
    }

    // Handle logo upload
    if ($request->hasFile('site_logo')) {
        $logoPath = $request->file('site_logo')->store('logos', 'public');
        DB::table('settings')->updateOrInsert(
            ['key' => 'site_logo'],
            ['value' => $logoPath]
        );
    }

    // Handle favicon upload
    if ($request->hasFile('site_favicon')) {
        $faviconPath = $request->file('site_favicon')->store('favicons', 'public');
        DB::table('settings')->updateOrInsert(
            ['key' => 'site_favicon'],
            ['value' => $faviconPath]
        );
    }

    return redirect()->back()->with('success', 'Settings updated successfully.');
}

}
