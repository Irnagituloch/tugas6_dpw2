<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class ClientController extends Controller
{

    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama','like',"%$nama$")->get();

        return view('frontview.product', $data);
    }

    function showAbout(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.about',$data);

    }

    function showBlog_list(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.blog_list',$data);

    }


    function showContact()
    {
       $data['list_produk'] = Produk::all();
       return view('frontview.contact',$data);
    }

    function showIndex()
    {
        return view('frontview.index');
    }

    function showProduct()
    {
        $data['list_produk'] = produk::all();
        return view('frontview.product',$data);

    }

    function showTestimonial(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.testimonial',$data);

    }

   
}
