<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HapusdataController extends Controller
{
    public function index(){
        return view('hapus');
    }
}
