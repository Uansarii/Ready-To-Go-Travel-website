<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trips extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $casts = [
    ];

  
    protected $table = 'usertrips';

    protected $fillable = ['firstname', 'lastname', 'cnic', 'phoneno', 'email', 'age','adults','children','dest','price','d_date','r_date','is_customized'];

   
}
