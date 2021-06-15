<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Economie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'writer', 'image'];
}
