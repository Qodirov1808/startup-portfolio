<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        return view('dashboart.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'map' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'google' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'logo1' => 'nullable|image|mimes:jpg,png,jpeg,svg,webp|max:2048',
            'logo2' => 'nullable|image|mimes:jpg,png,jpeg,svg,webp|max:2048',

        ]);
        $path1 = 'img1.jpg';
        $path2 = 'img1.jpg';

        if ($request->hasFile('logo1') && $request->hasFile('logo2')) {
            $path1 = md5(rand(1111,9999).microtime()). '.' .$request->logo1->extension();
            $path2 = md5(rand(1111,9999).microtime()). '.' .$request->logo2->extension();

            $request->logo1->storeAs('public/images/', $path1);
            $request->logo2->storeAs('public/images/', $path2);
        }

        Setting::create([
            'social_media' => [
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'google' => $request->google,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
            ],
            'map' => $request->map,
            'footer' => $request->footer,
            'logo1' => $path1,
            'logo2' => $path2,
        ]);

        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $setting = Setting::find($id);
        return view('dashboart.setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('dashboart.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'facebook' => 'required',
            'twitter' => 'required',
            'google' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'map' => 'required',
            'logo1' => 'nullable|image|mimes:jpg,png,jpeg,svg,webp|max:2048',
            'logo2' => 'nullable|image|mimes:jpg,png,jpeg,svg,webp|max:2048',
        ]);
        $setting = Setting::find($id);
        if ($request->hasFile('logo1') && $request->hasFile('logo2'))  {
            Storage::delete('public/images/' . $setting->logo1);
            Storage::delete('public/images/' . $setting->logo2);
            $path1 = md5(rand(1111,9999).microtime()). '.' .$request->logo1->extension();
            $path2 = md5(rand(1111,9999).microtime()). '.' .$request->logo2->extension();
            $request->logo1->storeAs('public/images/', $path1);
            $request->logo2->storeAs('public/images/', $path2);
            $setting->where('id', $id)->update([
                'social_media' => ['facebook'=>$request->facebook, 'twitter'=>$request->twitter, 'google'=>$request->google, 'linkedin'=>$request->linkedin, 'instagram'=>$request->instagram, ],
                'map' => $request->map,
                'footer' => $request->footer,
                'logo1' => $path1,
                'logo2' => $path2,
            ]);
        }else{
            $setting->where('id', $id)->update([
                'social_media' => ['facebook'=>$request->facebook, 'twitter'=>$request->twitter, 'google'=>$request->google, 'linkedin'=>$request->linkedin, 'instagram'=>$request->instagram, ],
                'map' => $request->map,
                'footer' => $request->footer,
            ]);
        }
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        if (!$setting) {
            return redirect()->route('item.index');
        }

        $pathDefault = 'img.jpg';
        $imagePath1 = public_path('storage/images/' . $setting->logo1);
        $imagePath2 = public_path('storage/images/' . $setting->logo2);

        if (file_exists($imagePath1) && is_file($imagePath1) && basename($imagePath1) !== $pathDefault) {
            unlink($imagePath1);
        }

        if (file_exists($imagePath2) && is_file($imagePath2) && basename($imagePath2) !== $pathDefault) {
            unlink($imagePath2);
        }

        $setting->delete();
        return redirect()->back();
    }

}
