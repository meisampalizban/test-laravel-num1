<?php

namespace App\Http\Controllers;

use App\Models\tabel_1;
use App\Models\tabel_2;
use App\Models\tabel_3;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = tabel_1::get();
        return view('home', ['data' => $data]);
    }
}
