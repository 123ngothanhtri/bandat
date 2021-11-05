<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BaiViet;
use App\Models\Like;
use App\Models\BinhLuan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use File;
use Image;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    function loginUser(){
        return view('home.login');
    }
    function postLoginUser(Request $req){
        if(Auth::guard('web')->attempt(['email'=>$req->em,'password'=>$req->pw])){
            return redirect('/profile-user')->with('msg','Đăng nhập thành công');
        }
        else {
            return back()->with('er','Sai tài khoản mật khẩu');
        }
    }
    function registerUser(){
        return view('home.register');
    }
    function postRegisterUser(Request $req){
        $this->validate($req,[
            'hoten'=>'required|min:3|max:50',
            'email'=>'required|min:5|max:90',
            'pwd'=>'required|min:5|max:50',
        ],[
            'hoten.required'=>'Phải nhập họ tên',
            'hoten.min'=>'Tên phải đủ 3 kí tự ',
            'hoten.max'=>'Tên phải ít hơn 50 kí tự',
            'email.required'=>'Phải nhập email',
            'email.min'=>'Email phải đúng định dạng',
            'email.max'=>'Email phải đúng định dạng',
            'pwd.min'=>'Phải nhập mật khẩu',
            'pwd.min'=>'Mật khẩu phải đủ 3 kí tự',
            'pwd.max'=>'Mật khẩu phải ít hơn 50 kí tự',
        ]);
        $checkEmail=User::all()->where('email','=',$req->email);
        if(count($checkEmail)>0){
            return back()->with('er','Email đã được đăng ký');
        }
        else {
            $user=new User;
            $user->name = $req->hoten;
            $user->email = $req->email;
            $user->password = bcrypt($req->pwd);
            $user->save();
            return redirect('login-user')->with('msg','Đăng ký thành công');
        }    
    
       
    }
    function profileUser(){
        $bv=BaiViet::where('id',Auth::guard('web')->user()->id)->orderBy('id_baiviet','desc')->get();
        return view('home.profile_user',compact('bv'));
        
    }
    function logoutUser(){
        Auth::guard('web')->logout();
        return redirect('/')->with('msg','Đã đăng xuất');
    }
    function capNhatUser(){
        return view('home.cap_nhat_user');
    }
    function postCapNhatUser(Request $req){
        $user = User::find(Auth::guard('web')->user()->id);
        $user->name = $req->hoten;
        $user->birthday = $req->ngaysinh;
        $user->gender = $req->gioitinh;
        if($req->hasFile('hinhanh')){
            File::delete(public_path($user->image));
            $user->image = $req->file('hinhanh')->store('avatar','hello');
            Image::make(public_path($user->image))->resize(null,200,function($c){$c->aspectRatio();})->save();
        }
        $user->save();

        return redirect('profile-user')->with('msg','Đã cập nhật');
    }
    function matKhauUser(){
        return view('home.mat_khau_user');
    }
    function postMatKhauUser(Request $req){
        $e = Auth::guard('web')->user()->email;
        if(Auth::guard('web')->attempt(['email'=>$e,'password'=>$req->mkc])){

            if($req->mkm==$req->mkmm){
                $mk = User::find(Auth::guard('web')->user()->id);
                $mk->password = bcrypt($req->mkm);
                $mk->save();
                return redirect('profile-user')->with('msg','Đổi mật khẩu thành công');
            }
            else{
                return back()->with('er','Mật khẩu mới không khớp');
            }

        }
        else {
            return back()->with('er','Mật khẩu cũ không đúng');
        }
        
    }
    
    function xoaBaiViet($id){
        $bv = BaiViet::where('id_baiviet',$id)->first();
        if($bv && Auth::guard('web')->user()->id == $bv->id){

            $hinhanh = explode('|',$bv->hinhanh_baiviet);
            foreach($hinhanh as $img){
                File::delete(public_path($img));
            }
            $bv->delete();
            return back()->with('msg','Xóa thành công');
        }
        else{
            return back()->with('er','Bài viết không tồn tại');
        }
    }
}
