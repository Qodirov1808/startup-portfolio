<?php

namespace App\Http\Controllers;

use App\Models\CounterItem;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CounterItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $counterItems = CounterItem::all();
      return view('dashboart.menus.counterItem.index', compact('counterItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.menus.counterItem.create');
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
            'count' =>'required|string',
            'icon' =>'required|string',
        ]);

        CounterItem::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'count' => $request->count,
            'icon' => $request->icon,
        ]);
        return redirect(route('counterItem.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $counterItem = CounterItem::find($id);
        return view('dashboart.menus.counterItem.show', compact('counterItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $counterItem = CounterItem::find($id);
        return view('dashboart.menus.counterItem.edit', compact('counterItem'));
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
            'count' =>'required',
            'icon' =>'required',
        ]);
        $counterItem = CounterItem::find($id);

        $counterItem->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'count' => $request->count,
                'icon' => $request->icon,
            ]);

        return redirect(route('counterItem.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $counterItem = CounterItem::find($id);
       $counterItem->delete();
       return redirect()->back();
    }
}
