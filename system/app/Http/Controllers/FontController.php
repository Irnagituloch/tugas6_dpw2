<?php

namespace App\Http\Controllers;

use App\Models\produk;

class FontController extends Controller
{
    function showAbout()
    {
        return view('fontend.about');
    }

    function showHome()
    {
        return view('fontend.home');
    }

    function showProduct()
    {
        $data['list_produk'] = Produk::all();
        return view('fontend.product', $data);
    }
}
