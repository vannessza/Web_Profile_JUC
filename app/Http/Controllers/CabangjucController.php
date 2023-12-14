<?php

namespace App\Http\Controllers;

use App\Models\CabangJuc;
use Illuminate\Http\Request;

class CabangjucController extends Controller
{
    public function index(){
        return CabangJuc::all();
    }
}
