<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
    	return view('home');
    }
    public function sparepart(){
    return view('sparepart');
    }
    public function masuk(){
    	return view('masuk');
    }
    public function register(){
    	return view('register');
    }
    public function tentang(){
    	return view('tentang');
    }
    public function montir(){
    	return view('montir');
    }
    public function blog(){
    	return view('blog');
    }
    public function ban(){
    	return view('sparepart.ban');
    }
    public function oli(){
        return view('sparepart.oli');
    }
    public function lampu(){
        return view('sparepart.lampu');
    }
    public function keluar()
    {
        return redirect('/');
    }
}
