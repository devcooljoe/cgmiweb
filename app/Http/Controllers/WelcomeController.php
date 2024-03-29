<?php

namespace App\Http\Controllers;

use App\Models\AccountDetail;
use App\Models\AudioMessage;
use App\Models\Book;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\HeroBanner;
use App\Models\Message;

class WelcomeController extends Controller
{
    public function index()
    {
        $live = Message::orderBy('id', 'DESC')->first();
        $events = Event::orderBy('id', 'DESC')->paginate(9);
        $heroBanners = HeroBanner::all();
        $heroList = [];
        foreach ($heroBanners as $key => $heroBanner) {
            array_push($heroList, ['image' => $heroBanner->picture, 'title' => $heroBanner->title]);
        }
        $heroBannerJson = json_encode($heroList);

        return view('index', compact(['live', 'events', 'heroBannerJson', 'heroBanners']));
    }

    public function about()
    {
        return view('about');
    }

    public function sermon()
    {
        $live = Message::orderBy('id', 'DESC')->first();
        $messages = Message::orderBy('id', 'DESC')->paginate(6);

        return view('sermon', compact(['messages', 'live']));
    }

    public function audio_sermon()
    {
        $messages = AudioMessage::orderBy('id', 'DESC')->paginate(6);

        return view('audio_sermon', compact('messages'));
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->paginate(20);

        return view('gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function book()
    {
        $books = null;
        if (request('search') != null) {
            $books = Book::where('title', 'LIKE', '%'.request('search').'%')->orWhere('author', 'LIKE', '%'.request('search').'%')->orderBy('id', 'DESC')->paginate(20);
        } else {
            $books = Book::orderBy('id', 'DESC')->paginate(20);
        }

        return view('book', compact('books'));
    }

    public function donate()
    {
        $accounts = AccountDetail::orderBy('id', 'DESC')->paginate(20);

        return view('donate', compact('accounts'));
    }
}
