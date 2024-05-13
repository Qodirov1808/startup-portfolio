<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
       return view('dashboart.menus.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dashboart.menus.portfolio.create');
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
            'data_title' =>'required|string',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);

        $path = 'img.jpg';
        if ($request->hasFile('image')) {
            $path = md5(rand(1111,9999).microtime()). '.' .$request->image->extension();
            $request->image->storeAs('public/images/', $path);
        }
        Portfolio::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
            'data_title' => $request->data_title,
            'image' => $path,
        ]);

        return redirect(route('portfolio.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
     $portfolio  = Portfolio::find($id);
     return view('dashboart.menus.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $portfolio = Portfolio::find($id);
       return view('dashboart.menus.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'text_uz' => 'required|string|max:255',
            'text_en' => 'required|string|max:255',
            'text_ru' => 'required|string|max:255',
            'data_title' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpg,png,jpeg,svg,webp'
        ]);
        $portfolio = Portfolio::find($id);
        if ($request->hasFile('image')) {
            Storage::delete('public/images/' . $portfolio->image);

            $path = md5(rand(1111, 9999) . microtime()) . '.' . $request->image->extension();
            $request->image->storeAs('public/images/', $path);
            $portfolio->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
                'data_title' => $request->data_title,
                'image' => $path,
            ]);
        }else{
            $portfolio->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
                'data_title' => $request->data_title,
            ]);
        }
        return redirect(route('portfolio.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if (!$portfolio) {
            return redirect()->route('item.index');
        }
        $pathDefault = 'img.jpg';
        $imagePath = public_path('storage/images/' . $portfolio->image);
        if (file_exists($imagePath) && is_file($imagePath) && basename($imagePath) !== $pathDefault) {
            unlink($imagePath);
        }
        $portfolio->delete();
        return redirect()->back();
    }
}
