<?php

namespace App\Http\Controllers;

use App\Models\Economie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EconomieController extends Controller
{

    /**
     * EconomieController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $economies = Economie::all()->sort(function ($a, $b){
            return strtotime($b->updated_at) - strtotime($a->updated_at);
        });

        return view('economie.index', compact('economies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('economie.create');
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
                'writer.max' => 'U heeft meer dan 255 characters!'
            ]);

        if($request->hasFile('image')){
            $image = time(). $request->file('image')->getClientOriginalName();
            $request->image->storeAs('economies', $image, 'public');
        } else {
            $image = null;
        }

        $economie = new Economie();

        $economie->title = $request->input('title');
        $economie->body = $request->input('body');
        $economie->writer = $request->input('writer');

        $economie->image = $image;
        $economie->save();

        return redirect(route('economie.index'))->with('status', 'Artikel succesvol aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Economie  $economie
     * @return \Illuminate\Http\Response
     */
    public function show(Economie $economie)
    {
        return view('economie.show', ['economie' => $economie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Economie  $economie
     * @return \Illuminate\Http\Response
     */
    public function edit(Economie $economie)
    {
        return view('economie.edit', ['economie' => $economie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Economie  $economie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Economie $economie)
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

        $image = $request->has('file') ? time(). $request->file('image')->getClientOriginalName() : $economie->image;

        if ($request->has('image')){
            Storage::delete('/storage/economies/'. $economie->image);
            unlink(public_path('storage/economies/') . $economie->image);

            $request->image->storeAs('economies', $image, 'public');
        }

        $economie->update([
            'title' => $request->title,
            'body' => $request->body,
            'writer' => $request->writer,
            'image' => $image,
        ]);

        return redirect(route('economie.index'))->with('status', $economie->title. ' is bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Economie  $economie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Economie $economie)
    {
        unlink(public_path('storage/economies/') . $economie->image);

        $economie->delete();

        return redirect(route('economie.index'))->with('status', 'Artikel succesvol verwijderd');
    }
}
