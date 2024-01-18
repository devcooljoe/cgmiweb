<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroBannerRequest;
use App\Http\Requests\UpdateHeroBannerRequest;
use App\Models\HeroBanner;
use App\Models\Func;

class HeroBannerController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(HeroBanner::class, 'heroBanner');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroBanners = HeroBanner::orderBy('id', 'DESC')->paginate(20);

        return view('admin.hero.index', compact('heroBanners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeroBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeroBannerRequest $request)
    {
        $picture = Func::uploadFile($_FILES["picture"], 'uploads');
        // $picture = $request->file('picture')->store('uploads', 'public');
        auth()->user()->herobanner()->create([
            'title' => $request->title,
            'picture' => $picture,
        ]);

        return redirect()->route('heroBanner.index')->with('success', 'Hero banner added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HeroBanner $heroBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(HeroBanner $heroBanner)
    {
        return view('admin.hero.create', compact('heroBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeroBannerRequest  $request
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeroBannerRequest $request, HeroBanner $heroBanner)
    {
        $picture = Func::uploadFile($_FILES["picture"], 'uploads');
        // $picture = $request->file('picture')->store('uploads', 'public');
        $heroBanner->update([
            'title' => $request->title,
            'picture' => $picture,
        ]);

        return redirect()->route('heroBanner.index')->with('success', 'Hero banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroBanner  $heroBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroBanner $heroBanner)
    {
        $heroBanner->delete();

        return redirect()->route('heroBanner.index')->with('success', ' Hero banner deleted successfully');
    }
}
