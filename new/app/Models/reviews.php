<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;
class reviews extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'reviews';
    protected $fillable = ['name', 'description','date'];
}
