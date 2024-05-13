<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $contactLists = ContactList::all();
     return view('dashboart.menus.contactList.index', compact('contactLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboart.menus.contactList.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);
        ContactList::create([
           'city' => $request->city,
           'phone' => $request->phone,
           'email' => $request->email,
           'location' => $request->location,
        ]);
        return redirect(route('contactList.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $contactList = ContactList::find($id);
       return view('dashboart.menus.contactList.show', compact('contactList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $contactList = ContactList::find($id);
      return view('dashboart.menus.contactList.edit', compact('contactList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|max:255',
            'location' =>'required|string',
        ]);
        $contactList = ContactList::find($id);

            $contactList->where('id', $id)->update([
               'city' => $request->city,
                'phone' => $request->phone,
                'email' => $request->email,
                'location' => $request->location,
            ]);
        return redirect(route('contactList.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $contactList = ContactList::find($id);
      $contactList->delete();
      return redirect()->back();
    }
}
