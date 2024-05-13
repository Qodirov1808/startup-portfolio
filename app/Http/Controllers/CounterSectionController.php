<?php

namespace App\Http\Controllers;

use App\Models\CounterSection;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CounterSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $counterSections = CounterSection::all();
      return view('dashboart.menus.counterSection.index', compact('counterSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dashboart.menus.counterSection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);

        $path = 'img.jpg';
        if ($request->hasFile('image')) {
            $path = md5(rand(1111,9999).microtime()). '.' .$request->image->extension();
            $request->image->storeAs('public/images/', $path);
        }
        CounterSection::create([
            'image' => $path,
        ]);

        return redirect(route('counterSection.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $counterSection = CounterSection::find($id);
        return view('dashboart.menus.counterSection.show', compact('counterSection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
    $counterSection = CounterSection::find($id);
    return view('dashboart.menus.counterSection.edit', compact('counterSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);
        $counterSection = CounterSection::find($id);
        if ($request->hasFile('image')) {
            Storage::delete('public/images/' . $counterSection->image);
            $path = md5(rand(1111, 9999) . microtime()) . '.' . $request->image->extension();
            $request->image->storeAs('public/images/', $path);
            $counterSection->where('id', $id)->update([
                'image' => $path,
            ]);
        }else{

        }
        return redirect(route('counterSection.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $counterSection = CounterSection::find($id);
        if (!$counterSection) {
            return redirect()->route('item.index');
        }
        $pathDefault = 'img.jpg';
        $imagePath = public_path('storage/images/' . $counterSection->image);
        if (file_exists($imagePath) && is_file($imagePath) && basename($imagePath) !== $pathDefault) {
            unlink($imagePath);
        }
        $counterSection->delete();
        return redirect()->back();
    }

}
