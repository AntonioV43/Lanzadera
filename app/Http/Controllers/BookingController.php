<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show(Destination $destination)
    {        
        return view('frontend.index.booking', compact('destination'));
    }
}