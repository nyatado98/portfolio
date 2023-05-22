<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use Illuminate\Http\Request;

class Comment extends Controller
{
    //
    public function comments(Request $request){
        $request->validate([
            "fullname"=>'required',
            "email"=>'required',
            "message"=>'required'
        ],
        [
            "fullname.required"=>'please fill this area',
            "email.required"=>'please fill this area',
            "message.required"=>'please fill this area',
        ]
        );

        $comment =new Comments;
        $comment->fullname = $request->fullname;
        $comment->email = $request->email;
        $comment->message = $request->message;
        $comment->save();
        return redirect('/')->with('message',"Comment sent successfully");
    }
}
