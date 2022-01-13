<?php

namespace App\Http\Controllers;

use App\Models\Objednavka;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);
        return back();
    }

    public function destroy($id)
    {
        if (Comment::destroy($id)) {
            return response('success', 200);
        }
    }

}
