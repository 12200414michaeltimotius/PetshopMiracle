<?php

namespace App\Controllers;

class petshop extends BaseController
{
    public function dashboard()
    {
        return view('tampilan/dashboard');
    }
    public function about()
    {
        return view('tampilan/about');
    }
    public function price()
    {
        return view('tampilan/price');
    }
    public function login()
    {
        return view('tampilan/login');
    }
    public function member()
    {
        return view('member/teammember');
    }
    public function toko()
    {
        return view('Toko/tokopetshop');
    }
    public function cart()
    {
        return view('Toko/cart');
    }
    public function invoice()
    {
        return view('Toko/invoice');
    }
    public function checkout()
    {
        return view('Toko/checkout');
    }
}