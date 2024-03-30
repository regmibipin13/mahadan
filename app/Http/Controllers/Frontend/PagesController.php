<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(Request $request)
    {
        $events = Event::approved()->search($request->search)->paginate(20);
        return view('frontend.pages.home', compact('events'));
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function events(Request $request)
    {
        $events = Event::approved()->search($request->search)->paginate(20);
        return view('frontend.pages.events', compact('events'));
    }
    public function event(Event $event)
    {
        return view('frontend.pages.event', compact('event'));
    }
}
