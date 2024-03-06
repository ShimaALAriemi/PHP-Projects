<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;
    // public created_at => false;
    protected $fillable = ['title', 'description'];
    // public $timestamps = false;

}
