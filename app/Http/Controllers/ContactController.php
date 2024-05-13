<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contacts = Contact::all();
       return view('dashboart.menus.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dashboart.menus.contact.create');
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
        Contact::create([
            'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
            'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
            'description' => $request->description,
        ]);
        return redirect(route('contact.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $contact = Contact::find($id);
     return view('dashboart.menus.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
      $contact = Contact::find($id);
      return view('dashboart.menus.contact.edit', compact('contact'));
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
            'description' =>'required|string',
        ]);
        $contact = Contact::find($id);
            $contact->where('id', $id)->update([
                'title' => ['title_uz' => $request->title_uz, 'title_en' => $request->title_en, 'title_ru' => $request->title_ru],
                'text' => ['text_uz' => $request->text_uz, 'text_en' => $request->text_en, 'text_ru' => $request->text_ru],
                'description' => $request->description,
            ]);

        return redirect(route('contact.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $contact = Contact::find($id);
       $contact->delete();
       return redirect()->back();
    }
}
