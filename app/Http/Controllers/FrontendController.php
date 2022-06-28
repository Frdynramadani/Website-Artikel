<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $artikel = Artikel::all();
        return view('front.layouts.frontend',[
            'artikel' => $artikel
        ]);
    }
}
