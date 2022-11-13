<?php

namespace App\Http\Controllers;

use App\Models\AccountDetail;
use App\Models\Book;
use App\Models\Message;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('index');
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

    public function contact()
    {
        return view('contact');
    }

    public function book()
    {
        $books = Book::orderBy('id', 'DESC')->paginate(20);

        return view('book', compact('books'));
    }

    public function donate()
    {
        $accounts = AccountDetail::orderBy('id', 'DESC')->paginate(20);

        return view('donate', compact('accounts'));
    }
}
