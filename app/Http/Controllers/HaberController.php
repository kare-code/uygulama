<?php

namespace App\Http\Controllers;

use App\Haber;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

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
        // getting all of the post data
        $file = array('image' => Input::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            echo 'Lütfen resim dosya biçimi kullanın';
        } else {
            // checking file is valid.
            if (Input::file('image')->isValid()) {
                $destinationPath = 'img/haberler/'; // upload path
                $image = Input::file('image');
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $path = $destinationPath . $filename;
                Image::make($image->getRealPath())->resize(500, 500)->save($path);
                $request->merge(['user_id'=>Auth::user()->id,'resim_500'=> $path]);
                Haber::create($request->all());
                return "başarılı";
            } else {
                echo 'Sunucu Hatası';
            }
        }

    }
}
