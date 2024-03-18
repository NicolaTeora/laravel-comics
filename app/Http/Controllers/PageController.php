<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('characters');
    }

    public function comics()
    {
        $comicon = config('comics');
        return view('comics', compact('comicon'));
    }

    public function movies()
    {
        return view('movies');
    }

    public function comicDetail($id)
    {
        $comicon = config('comics');
        $item = $comicon[$id];
        return view('comic_det', compact('item'));
    }
}
