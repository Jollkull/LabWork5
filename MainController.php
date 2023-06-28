<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use App\Models\Tours;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public static function history(Request $request)
    {
        $stories = Stories::all();
        return view('history', ['stories' => $stories]);
    }

    public static function tour(Request $request)
    {
        $tours = Tours::all();
        return view('tour', ['tours' => $tours]);
    }
}
