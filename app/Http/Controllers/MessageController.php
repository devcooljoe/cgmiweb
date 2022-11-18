<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Message::class, 'message');
    }

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $messages = Message::orderBy('id', 'DESC')->paginate(20);

        return view('admin.message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('admin.message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     *
     */
    public function store(StoreMessageRequest $request)
    {
        auth()->user()->message()->create([
            'link' => $request->link,
        ]);

        return redirect()->route('message.index')->with('success', 'Message added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     *
     */
    public function edit(Message $message)
    {
        return view('admin.message.create', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageRequest  $request
     * @param  \App\Models\Message  $message
     *
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        $message->update([
            'link' => $request->link,
        ]);

        return redirect()->route('message.index')->with('success', 'Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     *
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('message.index')->with('success', ' Message deleted successfully');
    }
}
