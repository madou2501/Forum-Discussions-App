<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Session;
use Auth;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function like($id)
    {
        Like::create([

            'user_id'   => Auth::id(),
            'reply_id'  => $id
        ]);

        Session::flash('success', 'You Liked The Reply.');

        return redirect()->back();
    }

    public function unlike($id)
    {
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();

        $like->delete();

        Session::flash('success', 'You Unliked The Reply.');

        return redirect()->back();
    }

    public function best_answer($id)
    {
        $reply = Reply::find($id);

        $reply->best_answer = 1;

        $reply->save();

        Session::flash('success', 'Reply Has been Marked as The Best Answer.');

        return redirect()->back();
    }

    public function edit($id)
    {
        return view("replies.edit", ['reply' => Reply::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content'   => 'required'
        ]);

        $reply = Reply::find($id);
        $reply->content = $request->content;
        $reply->save();

        Session::flash('success', 'Reply Updated');

        return redirect()->route('discussion', ['slug' => $reply->discussion->slug]);
    }
}
