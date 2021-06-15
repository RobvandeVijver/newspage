<?php

namespace App\Http\Controllers;

use App\Models\Binnenland;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BinnenlandController extends Controller
{

    /**
     * BinnenlandController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $binnenlands = Binnenland::all()->sort(function ($a, $b){
            return strtotime($b->updated_at) - strtotime($a->updated_at);
        });

        return view('binnenland.index', compact('binnenlands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('binnenland.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:255',
            'body' => 'required | max:255',
            'writer' => 'required | max:255',
            'image' => 'required'
        ],
        [
            'title.required' => 'U bent vergeten een titel toe te voegen!',
            'body.required' => 'U bent vergeten een alinea te schrijven!',
            'writer.required' => 'U bent vergeten de schrijver toe te voegen!',
            'image.required' => 'U bent vergeten een afbeelding toe te voegen!',
            'title.max' => 'U heeft meer dan 255 characters!',
            'body.max' => 'U heeft meer dan 255 characters!',
            'writer.max' => 'U heeft meer dan 255 characters!',
        ]);

        if($request->hasFile('image')){
            $image = time(). $request->file('image')->getClientOriginalName();
            $request->image->storeAs('binnenlands', $image, 'public');
        } else {
            $image = null;
        }

        $binnenland = new Binnenland();

        $binnenland->title = $request->input('title');
        $binnenland->body = $request->input('body');
        $binnenland->writer = $request->input('writer');

        $binnenland->image = $image;
        $binnenland->save();

        return redirect(route('binnenland.index'))->with('status', 'Artikel succesvol aangemaakt');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Binnenland  $binnenland
     */
    public function show(Binnenland $binnenland)
    {
        return view('binnenland.show', ['binnenland' => $binnenland]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Binnenland  $binnenland
     */
    public function edit(Binnenland $binnenland)
    {
        return view('binnenland.edit', ['binnenland' => $binnenland]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Binnenland  $binnenland
     */
    public function update(Request $request, Binnenland $binnenland)
    {
        $request->validate([
            'title' => 'required | max:255' ,
            'body' => 'required | max:255',
            'writer' => 'required | max:255',
        ],
        [
            'title.required' => 'U bent vergeten een titel toe te voegen!',
            'body.required' => 'U bent vergeten een alinea te schrijven!',
            'writer.required' => 'U bent vergeten de schrijver toe te voegen!',
            '.max' => 'U heeft meer dan 255 characters!'
        ]);

        $image = $request->has('file') ? time(). $request->file('image')->getClientOriginalName() : $binnenland->image;

        if ($request->has('image')){
            Storage::delete('storage/binnenlands/'. $binnenland->image);
            unlink(public_path('storage/binnenlands/') . $binnenland->image);

            $request->image->storeAs('binnenlands', $image, 'public');
        }

        $binnenland->update([
           'title' => $request->title,
            'body' => $request->body,
            'writer' => $request->writer,
            'image' => $image,
        ]);

        return redirect(route('binnenland.index'))->with('status', $binnenland->title. ' is bijgewerkt');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Binnenland  $binnenland
     */
    public function destroy(Binnenland $binnenland)
    {
        unlink(public_path('storage/binnenlands/') . $binnenland->image);

        $binnenland->delete();

        return redirect(route('binnenland.index'))->with('status', 'Artikel succesvol verwijderd');
    }

}
