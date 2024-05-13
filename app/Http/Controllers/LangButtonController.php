<?php

namespace App\Http\Controllers;

use App\Models\LangButton;
use App\Models\Blog;
use App\Models\Home;
use App\Models\Menu;
use Illuminate\Http\Request;


class LangButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $langButtons = LangButton::all();
      return view('dashboart.langbutton.index', compact('langButtons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuIds = [1, 4];
        $menuId = Menu::whereIn('id', $menuIds)->get();
        $menus = Menu::all();

        $homes = Home::all();
        $blogs = Blog::all();
//        $merged = $homes->concat($blogs);
        return view('dashboart.langbutton.create', compact('homes', 'blogs','menus','menuId'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'home_id' => 'nullable',
            'blog_id' => 'nullable',
            'button_name_uz' => 'required',
            'button_name_en' => 'required',
            'button_name_ru' => 'required',
            'url' => 'nullable',
            'button_link' => 'required',
        ]);
        if ($request->home_id === null) {
        LangButton::create([
                'menu_id' => $request->menu_id,
                'blog_id' => $request->blog_id,
                'button_name' => ['button_name_uz' => $request->button_name_uz, 'button_name_en' => $request->button_name_en, 'button_name_ru' => $request->button_name_ru],
                'button_link' => $request->button_link,
                'url' => $request->url
            ]);
        }else{
            LangButton::create([
                'menu_id' => $request->menu_id,
                'home_id' => $request->home_id,
                'button_name' => ['button_name_uz' => $request->button_name_uz, 'button_name_en' => $request->button_name_en, 'button_name_ru' => $request->button_name_ru],
                'button_link' => $request->button_link,
                'url' => $request->url
            ]);
        }
        return redirect(route('langButton.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $langButton = LangButton::find($id);
     return view('dashboart.langbutton.show', compact('langButton'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menuIds = [1, 4];
        $menuId = Menu::whereIn('id', $menuIds)->get();
        $menus = Menu::all();
        $homes = Home::all();
        $blogs = Blog::all();
        $langButton = LangButton::find($id);
        return view('dashboart.langbutton.edit', compact('langButton','homes', 'blogs','menus','menuId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'menu_id' => 'required',
            'home_id' => 'nullable',
            'blog_id' => 'nullable',
            'button_name_uz' => 'required',
            'button_name_en' => 'required',
            'button_name_ru' => 'required',
            'url' => 'nullable',
            'button_link' => 'required',
        ]);
        $langButton = LangButton::find($id);
        if ($request->home_id === null) {
            $langButton->where('id' , $id)->update([
                'menu_id' => $request->menu_id,
                'blog_id' => $request->blog_id,
                'button_name' => ['button_name_uz' => $request->button_name_uz, 'button_name_en' => $request->button_name_en, 'button_name_ru' => $request->button_name_ru],
                'button_link' => $request->button_link,
                'url' => $request->url
            ]);
        }else{
            $langButton->where('id' , $id)->update([
                'menu_id' => $request->menu_id,
                'home_id' => $request->home_id,
                'button_name' => ['button_name_uz' => $request->button_name_uz, 'button_name_en' => $request->button_name_en, 'button_name_ru' => $request->button_name_ru],
                'button_link' => $request->button_link,
                'url' => $request->url
            ]);
        }
        return redirect(route('langButton.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $langButton = LangButton::find($id);
        $langButton->delete();
        return redirect()->back();
    }
}
