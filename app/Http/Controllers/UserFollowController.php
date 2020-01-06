<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    //ユーザーをフォロー出来るようにする
    public function store(Request $request, $id)
    {
        \Auth::user()->follow($id);
        return back();
    }
    //ユーザーをアンフォロー出来るようにする
    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        return back();
    }
}
