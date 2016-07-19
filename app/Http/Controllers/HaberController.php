<?php

namespace App\Http\Controllers;

use App\Haber;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class HaberController extends Controller
{
    public function index()
    {
        $haberler=Haber::all();
        //dd($haberler);
        return view('haberler')->with('haberler',$haberler);
    }

    public function haber_ekle()
    {
        return view('haber_ekle');
    }

    public function haber_kaydet(Request $request)
    {
        $request->merge(['user_id'=>Auth::user()->id]);
        Haber::create($request->all());
        return "başarılı";
    }
}
