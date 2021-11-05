<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
use Illuminate\Support\Facades\Auth;
use File;
use Image;
class BaiVietController extends Controller
{
    function xemBaiViet($id){
        $baiviet = BaiViet::join('users', 'baiviet.id', 'users.id')->where('id_baiviet',$id)->first();
        return view('home.xem_bai_viet',compact('baiviet'));
    }
    function themBaiViet(){
        return view('home.them_bai_viet');
    }
    function postThemBaiViet(Request $req){
        $add = new BaiViet;
        if($req->tieude){
            $add->tieude_baiviet = $req->tieude;
        }
        if($req->mota){
            $add->mota_baiviet = $req->mota;
        }
        $add->gia_baiviet = $req->gia;
        $add->sdt_baiviet = $req->sdt;
        $add->dientich_baiviet = $req->dientich;
        $add->diachi_baiviet = $req->diachi;

        if($req->hasFile('hinhanh')){
            $array=[];
            $image = $req->file('hinhanh');
            foreach($image as $img){
                
                $photo = $img->store('hinhanh','hello');
                Image::make(public_path($photo))->resize(null,200,function($c){$c->aspectRatio();})->save();
                $array[] = $photo;
            }
            $add->hinhanh_baiviet = implode('|',$array);
        }
        $add->ngaytao_baiviet = date("Y-m-d H:i:s");
        $add->id = Auth::guard('web')->user()->id;
        $add->save();
        return redirect('/')->with('msg','Đã đăng');

    }
    function suaBaiViet($id){
        $bv = BaiViet::find($id);
        return view('home.sua_bai_viet',compact('bv'));
    }
    function postSuaBaiViet(Request $req){
        
        $bv = Baiviet::find($req->id_baiviet);
        if($bv && $bv->id==Auth::guard('web')->user()->id){
            
            $bv->tieude_baiviet = $req->tieude;
            $bv->mota_baiviet = $req->mota;
            $bv->gia_baiviet = $req->gia;
            $bv->sdt_baiviet = $req->sdt;
            $bv->dientich_baiviet = $req->dientich;
            $bv->diachi_baiviet = $req->diachi;

            if($req->hasFile('hinhanh')){

                $hinhanh = explode('|',$bv->hinhanh_baiviet);
                foreach($hinhanh as $img){
                    File::delete(public_path($img));
                }

                $array=[];
                $image = $req->file('hinhanh');
                foreach($image as $img){
                    
                    $photo = $img->store('hinhanh','hello');
                    Image::make(public_path($photo))->resize(null,200,function($c){$c->aspectRatio();})->save();
                    $array[] = $photo;
                }
                $bv->hinhanh_baiviet = implode('|',$array);
            }
            
            $bv->save();

            return redirect('profile-user')->with('msg','Đã chỉnh sửa');
        }
        else{
            return view('page_error');
        }
        
    }
}
