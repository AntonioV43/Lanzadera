<?php

namespace App\Http\Controllers\Admin;
use App\Models\Destination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $destinations = Destination::latest()->get();
        return view('frontend.index.categories', compact('destinations'));
    }
}
