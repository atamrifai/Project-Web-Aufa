<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin');
    }
    public function home()
    {
        return view('admin/content/home');
    }
    public function dashboard()
    {
        return view('admin/content/dashboard');
    }
    public function aboutus()
    {
        return view('admin/content/aboutus');
    }
    public function product()
    {
        return view('admin/content/product');
    }
    public function contact()
    {
        return view('admin/content/contact');
    }
    public function value()
    {
        return view('admin/content/value');
    }
}
