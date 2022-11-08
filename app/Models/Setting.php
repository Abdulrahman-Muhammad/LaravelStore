<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'address', 'phone', 'logo', 'favicon', 'facebook', 'twitter', 'instagram', 'youtube', 'email'];
    protected $table = 'settings';
}


