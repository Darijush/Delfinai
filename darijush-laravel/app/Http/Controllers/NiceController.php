<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $kuku = 'Dramblys')
    {
        dump($kuku);
        $mas = ['asilas', 'karvius', 'bulius', 'kalakutas'];
        return view('kitkas.fun', ['abc' => $kuku, 'mas' => $mas, 'kiek' => $duok]);
    }
    public function showForm(Request $request)
    {
        // $res= $request->session()->pull('res','ZERO');
        // $res= $request->session()->get('res','ZERO');
        return view('form');
    }
    public function doForm(Request $request)
    {
        $x=$request->x;
        $y=$request->y;
        $res = $x+$y;
        // $request->session()->put('res', $res);
        // $request->session()->flash('res', $res);
        return redirect()->route('show')->with('res',$res);
        }
}
