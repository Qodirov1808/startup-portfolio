<?php

namespace App\Http\Controllers;

use App\Models\ContactList;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $messages = Message::orderBy('created_at', 'desc')->get();
      return view('dashboart.message.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
        Message::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'city' => $request->city,
            'description' => $request->description,

        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
      $message = Message::find($id);
      $message->delete();
      return redirect()->back();
    }

    public function status($id)
    {
        $message = Message::find($id);
        if ($message->status == 'active') {
            $message->update([
                'status' => 'inactive'
            ]);
        } else {
            $message->update([
                'status' => 'active'
            ]);
        }
        return redirect()->back();
    }

    public function publicMessage($id)
    {
        $message = Message::find($id);
        if ($message->public_message == 'none') {
            $message->update([
                'public_message' => 'public'
            ]);
        } else {
            $message->update([
                'public_message' => 'none'
            ]);
        }
        return redirect()->back();
    }
    public function show($id)
    {
        $message = Message::find($id);
        return view('dashboart.message.show', compact('message'));
    }
}
