<?php

namespace App\Http\Controllers;

use App\Models\Urunler;
use App\Http\Requests\StoreUrunlerRequest;
use App\Http\Requests\UpdateUrunlerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class UrunlerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function urunler($id)
    {
        $datas=User::whereId($id)->with('getUrunler')->first() ?? abort(403,'Böyle Bir Ürün Bulunamadı');
        return view('admin.urunler_list',compact('datas'));
    }

    public function tum_urunler()
    {
      $datas=Urunler::paginate(36) ?? abort(403,'Böyle Bir Ürün Bulunamadı');
      return view('admin.tum_urunler',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function urun_olustur()
    {
        return view('admin.urun_olustur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUrunlerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function urun_olusturPost(Request $request)
    {
      if($request->hasFile('image')){
     $filename=$request->image->getClientOriginalName();//dosyas adı tanımlama//name tanımla!
     $fileNameWithUpload='uploads/'.$filename;//dosya yükleme
     $request->image->move(public_path('uploads'),$filename);
     $request->merge([
       'image'=>$fileNameWithUpload,
     ]);

     }
    Urunler::create($request->post());
   /*
    Urunler::create($request->post());
        */
    return redirect()->route('tum.urunler')->with('basarili','Ürün Başarıyla Eklendi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Urunler  $urunler
     * @return \Illuminate\Http\Response
     */
    public function urun_bilgisi($id)
    {
      $datas=Urunler::whereId($id)->with('getUser')->get() ?? abort(403,'Ürün Bulunamadı');
      return view('admin.urun_bilgisi',compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Urunler  $urunler
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUrunlerRequest  $request
     * @param  \App\Models\Urunler  $urunler
     * @return \Illuminate\Http\Response
     */
    public function urun_guncelle($id)
    {
        $urun=Urunler::whereId($id)->get() ?? abort(403,'Ürün Bulunamadı');
        return view('admin.urun_guncelle',compact('urun'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Urunler  $urunler
     * @return \Illuminate\Http\Response
     */
    public function urun_guncellePost($id,Request $request)
    {
      if($request->hasFile('image')){
     $filename=$request->image->getClientOriginalName();//dosyas adı tanımlama//name tanımla!
     $fileNameWithUpload='uploads/'.$filename;//dosya yükleme
     $request->image->move(public_path('uploads'),$filename);
     $request->merge([
       'image'=>$fileNameWithUpload,
     ]);

  }
    Urunler::find($id)->update($request->post());//burayı all dersen dosya tmp tanımlanır.post tanımla
    return redirect()->route('tum.urunler',$id)->with('basarili','Ürün Başarıyla Güncellendi');
  }

  public function urun_sil($id)
   {
     Urunler::whereId($id)->delete() ?? abort(404,'Ürün Bulunamadı');
     return redirect()->route('tum.urunler',$id)->with('basarili','Ürün Başarıyla Silindi');
   }

  public function musteri_urun($id)
  {
    $datas=Urunler::whereId($id)->with('getUser')->get() ?? abort(403,'Ürün Bulunamadı');
    return view('admin.urun_bilgisi',compact('datas'));
  }






}
