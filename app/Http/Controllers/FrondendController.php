<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\ContactList;
use App\Models\CounterSection;
use App\Models\Home;
use App\Models\LangButton;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Standalone;
use App\Models\StandaloneItem;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Portfolio;
use App\Models\CounterItem;
use App\Models\Message;

class FrondendController extends Controller
{
    public function index(){
        $menus = Menu::all()->slice(1);
        $dropMenu = Menu::all();
        $homes = Home::all();
        $portfolios = Portfolio::orderBy('id', 'desc')->take(6)->get();
        $counterSections = CounterSection::orderBy('created_at', 'desc')->take(1)->get();
        $counterItems = CounterItem::orderBy('created_at', 'desc')->take(4)->get();
        $reviews = Review::orderBy('created_at', 'desc')->take(1)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $contacts = Contact::orderBy('created_at', 'desc')->take(1)->get();
        $contactLists = ContactList::orderBy('created_at', 'desc')->take(2)->get();
        $messages = Message::all();
        $settings = Setting::orderBy('created_at', 'desc')->take(1)->get();
        $langButtons = LangButton::all();

        return view('frondend.index', compact('menus', 'dropMenu','homes','portfolios', 'counterSections', 'counterItems','reviews','blogs','contacts','contactLists','messages','settings','langButtons'));
    }
    public function standalone()
    {
        $menus = Menu::all()->slice(1);
        $dropMenu = Menu::all();
        $settings = Setting::orderBy('created_at', 'desc')->take(1)->get();
        $standalone = Standalone::orderBy('created_at', 'desc')->take(1)->get();
        $standaloneItems = StandaloneItem::orderBy('created_at', 'desc')->take(3)->get();
        return view('frondend.standalone', compact('menus', 'dropMenu','settings', 'standalone','standaloneItems'));
    }
}
