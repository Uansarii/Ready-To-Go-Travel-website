<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\trips;
use Illuminate\Support\Facades\DB;
class Packages extends Controller
{
    
    public function kashmir()
    {
        return view('kashmir');
    }
    public function shogran()
    {
        return view('shogran');
    }
    public function murree()
    {
        return view('Murree');
    }
    public function naran()
    {
        return view('Naran');
    }
    public function swat()
    {
        return view('Swat');
    }
    
    public function fairymeadows()
    {
        return view('FairyMeadows');
    }
}
