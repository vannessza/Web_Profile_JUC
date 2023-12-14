<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home(){
        return view('home', ["title"=> "JUC - Home"]);
    }

    public function riset(){
        return view('riset', ['title'=>"JUC-Riset"]);
    }
    public function seeallriset(){
        return view('seeallriset', ['title'=>"JUC-Riset"]);
    }
    public function baca(){
        return view('baca', ['title'=>"JUC-Riset"]);
    }
    public function tentangkami(){
        return view('tentangkami', ['title'=>"JUC-Tentang Kami"]);
    }
    public function siapakita(){
        return view('siapakita', ['title'=>"JUC-Tentang Kami"]);
    }
    public function tatakelola(){
        return view('tatakelola', ['title'=>"JUC-Tentang Kami"]);
    }
    public function hubungikami(){
        return view('hubungikami', ['title'=>"JUC-Hubungi Kami"]);
    }
    public function pusatbantuan(){
        return view('pusatbantuan', ['title'=>"JUC-Pusat Bantuan"]);
    }
    public function menubantuan(){
        return view('Menubantuan', ['title'=>"JUC-Pusat Bantuan"]);
    }
    public function bacabantuan(){
        return view('Bacabantuan', ['title'=>"JUC-Pusat Bantuan"]);
    }
    public function portofolioipo(){
        return view('Portofolioipo', ['title'=>"JUC-Portofolio IPO"]);
    }
    public function karir(){
        return view('Karir', ['title'=>"JUC-Karir"]);
    }
    public function bacakarir(){
        return view('Bacakarir', ['title'=>"JUC-Karir"]);
    }
    public function peraturan(){
        return view('peraturan',['title'=>"JUC-Peraturan"]);
    }
    public function bacaperaturan(){
        return view('bacaperaturan',['title'=>"JUC-Peraturan"]);
    }
    public function disclaimer(){
        return view('disclaimer', ['title'=>"JUC-Disclaimer"]);
    }
    public function pengaduannasabah(){
        return view('pengaduannasabah', ['title'=>"JUC-Pengaduhan Nasabah"]);
    }
    public function pembukaanrekening(){
        return view('pembukaanrekening', ['title'=>"JUC-Pembukaan Rekening"]);
    }
    public function rekeningindividu(){
        return view('rekeningindividu', ['title'=> "JUC-Rekening Individu"]);
    }
    public function rekeninginstitusi(){
        return view('rekeninginstitusi', ['title'=> "JUC-Rekening Institusi"]);
    }
    public function rekeningmarjin(){
        return view('rekeningmarjin', ['title'=> "JUC-Rekening Marjin"]);
    }
}
