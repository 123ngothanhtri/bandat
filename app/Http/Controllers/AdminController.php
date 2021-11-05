<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\BaiViet;
use App\Models\BinhLuan;
use App\Models\Like;
use App\Models\Follow;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    function loginAdmin(){
        return view('admin.login');
    }
    function postLoginAdmin(Request $req){
        if(Auth::guard('admin')->attempt(['email'=>$req->em,'password'=>$req->pw])){
            return redirect('/quan-ly-user');
        }
        else {
            return back()->with('er','Sai tài khoản mật khẩu');
        }
    }
    // function registerAdmin(){
    //     return view('admin.register');
    // }
    // function postRegisterAdmin(Request $req){
    //     $this->validate($req,[
    //         'hoten'=>'required|min:3|max:50',
    //         'email'=>'required|min:5|max:90',
    //         'pwd'=>'required|min:5|max:50',
    //     ],[
    //         'hoten.required'=>'Phải nhập họ tên',
    //         'hoten.min'=>'Tên phải đủ 3 kí tự ',
    //         'hoten.max'=>'Tên phải ít hơn 50 kí tự',
    //         'email.required'=>'Phải nhập email',
    //         'email.min'=>'Email phải đúng định dạng',
    //         'email.max'=>'Email phải đúng định dạng',
    //         'pwd.min'=>'Phải nhập mật khẩu',
    //         'pwd.min'=>'Mật khẩu phải đủ 3 kí tự',
    //         'pwd.max'=>'Mật khẩu phải ít hơn 50 kí tự',
    //     ]);
    //     $checkEmail=Admin::all()->where('email','=',$req->email);
    //     if(count($checkEmail)>0){
    //         return back()->with('er','Email đã được đăng ký');
    //     }
    //     else {
    //         $user=new Admin;
    //         $user->name = $req->hoten;
    //         $user->email = $req->email;
    //         $user->password = bcrypt($req->pwd);
    //         $user->save();
    //         return redirect('login-admin')->with('msg','Đăng ký thành công');
    //     }    
    // }
    function profileAdmin(){
         $uu=Auth::guard('admin')->user();
         return view('admin.profile_admin',['uu'=>$uu]);
        //dd($uu);
        
    }
    function quanLyBaiViet(){
        $baiviet = BaiViet::join('users', 'baiviet.id', 'users.id')
        ->orderBy('id_baiviet','desc')
        ->paginate(10);
        return view('/admin.quan_ly_bai_viet',compact('baiviet'));
    }
    function quanLyUser(){
        $user = User::all();
        return view('admin.quan_ly_user',compact('user'));
    }
    function deleteUser($id){

        $xoa = User::find($id);
  
        if($xoa){
            Follow::where('id_user',$id)->delete();//xóa follow
            Like::where('id',$id)->delete();//xóa like
            BinhLuan::where('id',$id)->delete();//xóa bình luận

            $xbv = BaiViet::where('id',$id)->get();
            if(count($xbv)>0){

                foreach($xbv as $x){
                    
                    BinhLuan::where('id_baiviet',$x->id_baiviet)->delete();//xóa ràng buộc khóa ngoại bình luận
                    Like::where('id_baiviet',$x->id_baiviet)->delete();//xóa ràng buộc khóa ngoại like
                    if($x->hinhanh_baiviet){

                        File::delete(public_path($x->hinhanh_baiviet));
                    }
                }
                BaiViet::where('id',$id)->delete();//xóa bài viết
            }
            if($xoa->image){
                //Storage::disk('public')->delete($xoa->image);
                File::delete(public_path($xoa->image));
            }
            $xoa->delete();
            return back()->with('msg','Xóa thành công');
        }
        else{
            return back()->with('er','User không tồn tại');
        }
        
    }
    function quanLyXoaBaiViet($id){
        $bv = BaiViet::where('id_baiviet',$id)->first();
        if($bv){
            BinhLuan::where('id_baiviet',$id)->delete();
            Like::where('id_baiviet',$id)->delete();
            File::delete(public_path($bv->hinhanh_baiviet));
            $bv->delete();
            return back()->with('msg','Xóa thành công');
        }
        else{
            return back()->with('er','Bài viết không tồn tại');
        }
    }
    function logoutAdmin(){
        Auth::guard('admin')->logout();
        return redirect('/login-admin');
    }

}