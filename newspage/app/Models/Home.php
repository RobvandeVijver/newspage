<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    public static function information()
    {
        $economies = collect(Economie::all());
        $binnenlands = collect(Binnenland::all());
        $sports = collect(Sport::all());

        $all = $economies->merge($binnenlands->merge($sports));

        return $all->sort(function ($a, $b){
            return strtotime($b->updated_at) - strtotime($a->updated_at);
        });
    }

    public static function random()
    {
        $economies = collect(Economie::all());
        $binnenlands = collect(Binnenland::all());
        $sports = collect(Sport::all());

        $all = $binnenlands->merge($economies->merge($sports));


        return $all;
    }

}
