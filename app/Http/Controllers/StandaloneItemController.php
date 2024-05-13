<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Standalone;
use App\Models\StandaloneItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StandaloneItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $standaloneItems = StandaloneItem::all();
        return view('dashboart.standaloneItem.index', compact('standaloneItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.standaloneItem.create');
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
            'text_uz' => 'required|string|max:255',
            'text_en' => 'required|string|max:255',
            'text_ru' => 'required|string|max:255',
            'description' =>'required|string',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);

        $path = 'img.jpg';
        if ($request->hasFile('image')) {
            $path = md5(rand(1111,9999).microtime()). '.' .$request->image->extension();
            $request->image->storeAs('public/images/', $path);
        }
        StandaloneItem::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect(route('standaloneItem.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $standaloneItem = StandaloneItem::find($id);
        return view('dashboart.standaloneItem.show', compact('standaloneItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $standaloneItem = StandaloneItem::find($id);
        return view('dashboart.standaloneItem.edit', compact('standaloneItem'));
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
            'text_uz' => 'required|string|max:255',
            'text_en' => 'required|string|max:255',
            'text_ru' => 'required|string|max:255',
            'description' =>'required|string',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);
        $standaloneItem = StandaloneItem::find($id);
        if ($request->hasFile('image')) {
            Storage::delete('public/images/' . $standaloneItem->image);
            $path = md5(rand(1111, 9999) . microtime()) . '.' . $request->image->extension();
            $request->image->storeAs('public/images/', $path);
            $standaloneItem->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
                'description' => $request->description,
                'image' => $path,
            ]);
        }else{
            $standaloneItem->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
                'description' => $request->description,
            ]);
        }
        return redirect(route('standaloneItem.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $standaloneItem = StandaloneItem::find($id);
        if (!$standaloneItem) {
            return redirect()->route('item.index');
        }
        $pathDefault = 'img.jpg';
        $imagePath = public_path('storage/images/' . $standaloneItem->image);
        if (file_exists($imagePath) && is_file($imagePath) && basename($imagePath) !== $pathDefault) {
            unlink($imagePath);
        }
        $standaloneItem->delete();
        return redirect()->back();
    }
}
