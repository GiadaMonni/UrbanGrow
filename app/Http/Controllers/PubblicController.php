<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class PubblicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }
}


