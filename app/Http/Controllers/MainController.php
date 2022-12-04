<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class MainController extends Controller
{
    public function simulasi(){
        $data = Unit::join('colors','colors.id','=','units.color_id')
        ->where('units.year_mc','2022')
        ->groupBy('units.model_name')
        ->orderBy('units.model_name', 'asc')
        ->get();

        return view('simulasi', compact('data'));
    }
}
