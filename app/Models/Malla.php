<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malla extends Model
{
    use HasFactory;

    protected $table = "Mallas";
    
    protected $primaryKey = 'idMalla';

    protected $fillable = ['idMalla', 'anioMalla'];
}
