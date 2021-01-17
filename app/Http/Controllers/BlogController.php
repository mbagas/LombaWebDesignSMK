<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('users.index');
    }

    public function blog()
    {
      return view('users.blog');
    }

    public function form()
    {
      return view('users.form');
    }

    public function about()
    {
      return view('users.about');
    }

    public function show()
    {
      return view('users.article1');
    }

    public function show2()
    {
      return view('users.article2');
    }

    public function show3()
    {
      return view('users.article3');
    }

    public function show4()
    {
      return view('users.article4');
    }

    public function product()
    {
      return view('users.product');
    }
    public function product1()
    {
      return view('users.produk1');
    }

    public function product2()
    {
      return view('users.produk2');
    }

    public function product3()
    {
      return view('users.produk3');
    }

    public function product4()
    {
      return view('users.produk4');
    }

    public function product5()
    {
      return view('users.produk5');
    }

    public function product6()
    {
      return view('users.produk6');
    }
}
