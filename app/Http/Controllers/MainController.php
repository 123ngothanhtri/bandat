<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function trangchu(){
        $bv = BaiViet::join('users', 'baiviet.id', 'users.id')->orderBy('id_baiviet','desc')->simplePaginate(5);
        
        return view('home.trang_chu',compact('bv'));
    }
    
}
