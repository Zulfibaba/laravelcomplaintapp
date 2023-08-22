<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;

class HomeController extends Controller
{
    public function show_complaints()
    {
        $complaints = complaint::paginate(3);
        return view('home', ['complaints' => $complaints]);
    }

    public function show(complaint $complaint)
    {
        return view('post.show', [
            'show' => $complaint
        ]);
    }
}
