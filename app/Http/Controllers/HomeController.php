<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;

class HomeController extends Controller
{
    public function show_complaints()
    {
        $complaints = complaint::all();
        return view('home', ['complaints' => $complaints]);
    }
}
