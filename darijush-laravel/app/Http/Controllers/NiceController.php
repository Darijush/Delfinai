<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $kuku = 'Dramblys')
    {
        dump($kuku);
        $mas = ['asilas', 'karvius','bulius','kalakutas'];
        return view('kitkas.fun', ['abc' => $kuku, 'mas'=>$mas,'kiek'=>$duok]);
    }
}
