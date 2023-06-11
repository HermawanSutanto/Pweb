<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil', [
            "title" => "Profil",
            "posts" => Profil::all()

        ]);
    }
    public function show($slug)
    {
        return view('post', [
            "title" => "single post",
            "post" => Profil::find($slug)
        ]);
    }
}
