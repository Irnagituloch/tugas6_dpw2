<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showtemplate()
    {
        return view('template.base');
    }


    function showkategori()
    {
        return view('admin.kategori');
    }


    function showpelanggan()
    {
        return view('admin.pelanggan');
    }

    function showsuppliyer()
    {
        return view('admin.suppliyer');
    }

    function showproduk()
    {
        return view('admin.produk');
    }

    function showberanda()
    {
        return view('admin.beranda');
    }
}