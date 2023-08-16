<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;

class DashboardController extends Controller
{
    public function show_complaints(Request $request)
    {
        // $complaints = complaint::all();
        $userid = $request->user()->id;
        $complaints = complaint::where('user_id', $userid)->get();
        return view('dashboard', ['complaints' => $complaints]);
    }
}
