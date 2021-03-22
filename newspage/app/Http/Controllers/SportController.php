<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SportController extends Controller
{

    /**
     * SportController constructor.
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
        $sports = Sport::all()->sort(function ($a, $b){
            return strtotime($b->updated_at) - strtotime($a->updated_at);
        });

        return view('sport.index', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sport.create');
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
                '.max' => 'U heeft meer dan 255 characters!'
            ]);

        if($request->hasFile('image')){
            $image = time(). $request->file('image')->getClientOriginalName();
            $request->image->storeAs('sports', $image, 'public');
        } else {
            $image = null;
        }

        $sport = new Sport();

        $sport->title = $request->input('title');
        $sport->body = $request->input('body');
        $sport->writer = $request->input('writer');

        $sport->image = $image;
        $sport->save();

        return redirect(route('sport.index'))->with('status', 'Artikel succesvol aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        return view('sport.show', ['sport' => $sport]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        return view('sport.edit', ['sport' => $sport]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
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

        $image = $request->has('file') ? time(). $request->file('image')->getClientOriginalName() : $sport->image;

        if ($request->has('image')){
            Storage::delete('/storage/sports/'. $sport->image);
            unlink(public_path('storage/sports/') . $sport->image);

            $request->image->storeAs('sports', $image, 'public');
        }

        $sport->update([
            'title' => $request->title,
            'body' => $request->body,
            'writer' => $request->writer,
            'image' => $image,
        ]);

        return redirect(route('sport.index'))->with('status', $sport->title. ' is bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sport $sport)
    {
        unlink(public_path('storage/sports/') . $sport->image);

        $sport->delete();

        return redirect(route('sport.index'))->with('status', 'Artikel succesvol verwijderd');
    }
}
