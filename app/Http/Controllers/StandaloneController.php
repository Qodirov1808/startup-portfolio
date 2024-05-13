<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Standalone;
use Illuminate\Http\Request;

class StandaloneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $standalone = Standalone::all();
      return view('dashboart.standalone.index', compact('standalone'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.standalone.create');
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
        ]);
        Standalone::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
            'description' => $request->description,
        ]);
        return redirect(route('standalone.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
      $standalone = Standalone::find($id);
      return view('dashboart.standalone.show', compact('standalone'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $standalone = Standalone::find($id);
       return view('dashboart.standalone.edit', compact('standalone'));
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
        ]);
        $standalone = Standalone::find($id);
        $standalone->where('id', $id)->update([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
            'description' => $request->description,
        ]);

        return redirect(route('standalone.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $standalone = Standalone::find($id);
      $standalone->delete();
      return redirect()->back();
    }
}
