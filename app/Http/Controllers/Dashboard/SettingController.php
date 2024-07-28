<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $generalSettings = Setting::where('category', 'general')->get();
        $emailSettings = Setting::where('category', 'email_options')->get();
        $socialMedia = Setting::where('category', 'social_media')->get();

        return view('dashboard.settings.index', compact('generalSettings', 'emailSettings' , 'socialMedia'));
    }


    public function update(Request $request)
    {
        $settingKeys = Setting::pluck('key')->toArray();
        $settingsData = $request->only($settingKeys);
        foreach ($settingsData as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        return redirect()->route('dashboard.settings.index')->with('success', 'Settings updated successfully.');
    }
}
