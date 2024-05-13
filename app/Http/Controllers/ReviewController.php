<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $reviews = Review::all();
       return view('dashboart.menus.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.menus.review.create');
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
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);

        $path = 'img.jpg';
        if ($request->hasFile('image')) {
            $path = md5(rand(1111,9999).microtime()). '.' .$request->image->extension();
            $request->image->storeAs('public/images/', $path);
        }
        Review::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'image' => $path,
        ]);
        return redirect(route('review.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('dashboart.menus.review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $review = Review::find($id);
       return view('dashboart.menus.review.edit', compact('review'));
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
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);
        $review = Review::find($id);
        if ($request->hasFile('image')) {
            Storage::delete('public/images/' . $review->image);
            $path = md5(rand(1111, 9999) . microtime()) . '.' . $request->image->extension();
            $request->image->storeAs('public/images/', $path);
            $review->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'image' => $path,
            ]);
        }else{
            $review->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            ]);
        }
        return redirect(route('review.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $review = Review::find($id);
        if (!$review) {
            return redirect()->route('item.index');
        }
        $pathDefault = 'img.jpg';
        $imagePath = public_path('storage/images/' . $review->image);
        if (file_exists($imagePath) && is_file($imagePath) && basename($imagePath) !== $pathDefault) {
            unlink($imagePath);
        }
        $review->delete();
        return redirect()->back();
    }
}
