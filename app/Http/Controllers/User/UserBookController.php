<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class UserBookController extends Controller
{
    public function index()
    {
        $books=Books::orderByDesc('created_at')->get();
        return view('user.Home.index',compact('books'));
    }

    public function search(Request $request)
    {
        $query=Books::query();
        if($request->has('title')){
        $query->where('title','LIKE',$request->title.'%');
        }
        $books=$query->get();
        return view('user.Home.index',compact('books'));
    }
}
