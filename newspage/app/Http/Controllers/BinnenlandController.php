<?php

namespace App\Http\Controllers;

use App\Models\Binnenland;
use Illuminate\Http\Request;

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
        $image = null;

        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalExtension();
            $request->image->storeAs('binnenlands', $image, 'public');
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Binnenland $binnenland)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Binnenland  $binnenland
     * @return \Illuminate\Http\Response
     */
    public function destroy(Binnenland $binnenland)
    {
        //
    }

}
