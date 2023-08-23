<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaint;
use App\Models\User;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('complaint');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $user = $request->user();
        $complaint = new Complaint;
        $complaint->title = $request->title;
        $complaint->description = $request->description;

        $user->complaint()->save($complaint);
        return redirect(route('complaint_index'))->with('status', 'Complaint submitted Successfully 😊');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $complaint = complaint::find($id);
        return view('editcomplaint', ['complaint' => $complaint]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $complaint = complaint::find($id);
        $complaint->title = $request->title;
        $complaint->description = $request->description;
        $complaint->save();

        return redirect(route('dashboard'))->with('status', 'Your Complaint Have been Successfully Updated 😌');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        complaint::destroy($id);
        return redirect(route('dashboard'))->with('status', 'Your Complaint Have been Deleted Successfully !!');
    }


    
}
