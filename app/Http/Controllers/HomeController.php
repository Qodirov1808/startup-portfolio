<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();
    return view('dashboart.menus.home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.menus.home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'description' =>'required|string',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);

        $path = 'img.jpg';
        if ($request->hasFile('image')) {
            $path = md5(rand(1111,9999).microtime()). '.' .$request->image->extension();
            $request->image->storeAs('public/images/', $path);
        }
        Home::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $home = Home::find($id);
        return view('dashboart.menus.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $home = Home::find($id);
        return view('dashboart.menus.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'description' =>'required|string',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);
        $home = Home::find($id);
        if ($request->hasFile('image')) {
            Storage::delete('public/images/' . $home->image);
            $path = md5(rand(1111, 9999) . microtime()) . '.' . $request->image->extension();
            $request->image->storeAs('public/images/', $path);
            $home->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'description' => $request->description,
                'image' => $path,
            ]);
        }else{
            $home->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'description' => $request->description,
            ]);
        }
        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $home = Home::find($id);
        if (!$home) {
            return redirect()->route('item.index');
        }
        $pathDefault = 'img.jpg';
        $imagePath = public_path('storage/images/' . $home->image);
        if (file_exists($imagePath) && is_file($imagePath) && basename($imagePath) !== $pathDefault) {
            unlink($imagePath);
        }
        $home->delete();
        return redirect()->back();
    }
}
