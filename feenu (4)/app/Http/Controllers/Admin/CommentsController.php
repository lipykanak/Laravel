<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function comments(Request $request){

        $comments = Comment::orderBy('comment_id','DESC')->get();
        return view('admin.comments',['comments'=>$comments]);
    }
}
