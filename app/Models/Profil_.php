<?php

namespace App\Models;



class Profil
{
    private static $data_diri = [[
        "Nama" => "Hermawan Sutanto",
        "slug" => "hermawan-sutanto",
        "NIM" => "212410101064",
        "Fakultas" => "Ilmu Komputer"
    ], [
        "Nama" => "Bima Satria",
        "slug" => "bima-satria",
        "NIM" => "212410101064",
        "Fakultas" => "Ilmu Komputer"
    ], [
        "Nama" => "Naufal Danendra",
        "slug" => "naufal-danendra",
        "NIM" => "212410101064",
        "Fakultas" => "Ilmu Komputer"
    ]];

    public static function all()
    {
        return collect(self::$data_diri);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
