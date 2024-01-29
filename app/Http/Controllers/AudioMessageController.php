<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAudioMessageRequest;
use App\Http\Requests\UpdateAudioMessageRequest;
use App\Models\AudioMessage;
use App\Models\Func;

class AudioMessageController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(AudioMessage::class, 'audioMessage');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audioMessages = AudioMessage::orderBy('id', 'DESC')->paginate(20);

        return view('admin.audio.index', compact('audioMessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.audio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAudioMessageRequest $request)
    {
        auth()->user()->audiomessage()->create([
            'embed' => $request->embed,
        ]);

        return redirect()->route('audioMessage.index')->with('success', 'Audio Message added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(AudioMessage $audioMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioMessage $audioMessage)
    {
        return view('admin.audio.create', compact('audioMessage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAudioMessageRequest $request, AudioMessage $audioMessage)
    {
        $audioMessage->update([
            'embed' => $request->embed,
        ]);

        return redirect()->route('audioMessage.index')->with('success', 'Audio Message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudioMessage $audioMessage)
    {
        $audioMessage->delete();

        return redirect()->route('audioMessage.index')->with('success', 'Audio Message deleted successfully');
    }
}