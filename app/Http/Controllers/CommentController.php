<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\complaint;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(complaint $complaint)
    {
        request()->validate([
            'body' => 'required',
        ]);


        $complaint->comments()->create([
            'body' =>  request('body'),
            'user_id' => auth()->id(),
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Comment::where('id', $id)->delete();
        return redirect('/');
    }
}
