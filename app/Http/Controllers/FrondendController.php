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
        $portfolios = Portfolio::all();
        $counterSections = CounterSection::all();
        $counterItems = CounterItem::all();
        $reviews = Review::all();
        $blogs = Blog::all();
        $contacts = Contact::all();
        $contactLists = ContactList::all();
        $messages = Message::all();
        $settings = Setting::all();
        $langButtons = LangButton::all();

        return view('frondend.index', compact('menus', 'dropMenu','homes','portfolios', 'counterSections', 'counterItems','reviews','blogs','contacts','contactLists','messages','settings','langButtons'));
    }
    public function standalone()
    {
        $menus = Menu::all()->slice(1);
        $dropMenu = Menu::all();
        $settings = Setting::all();
        $standalone = Standalone::all();
        $standaloneItems = StandaloneItem::all();
        return view('frondend.standalone', compact('menus', 'dropMenu','settings', 'standalone','standaloneItems'));
    }
}
