<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $query = User::query();
        //全件取得
        //$users = $query->get();
        //ページネーション
        $users = $query->orderBy('id','desc')->paginate(10);
        return view('users.index')->with('users',$users);
    }
}
