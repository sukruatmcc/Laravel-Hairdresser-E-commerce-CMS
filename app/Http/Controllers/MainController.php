<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urunler;
use App\Models\Randevu;
use App\Models\User;
use App\Models\Siparis;
use App\Models\Sepet;
use App\Models\İletisim;

class MainController extends Controller
{
    public function dashboard()
    {
      return view('dashboard');
    }

    public function purunler()
    {
      $datas=Urunler::paginate(36);
      return view('purunler',compact('datas'));
    }

    public function iletisim()
    {
      return view('iletisim');
    }

    public function iletisimPost(Request $request)
    {
      İletisim::create($request->post());
      return redirect()->route('hizmetler')->with('basarili','İşlem Başarıyla Gerçekleşti');
    }

     public function sepet()
     {
        $sepett= User::with('sepettGett')->first() ?? abort(403,'Ürün Bulunamadı');
        return  view('sepet',compact('sepett'));
     }

     public function iptal($id)
     {
       Urunler::whereId($id)->delete() ?? abort(404,'Ürün Bulunamadı');
       return redirect()->route('contact',$id)->with('basarili','Sipariş İptal Edildi. İletişime Geçiniz');
     }

     public function siparis(Request $request)
     {
       Sepet::create($request->post());
       return redirect()->back()->with('basarili','İşlem Başarıyla Gerçekleşti');
     }

     public function about()
     {
       return view('hakkimizda');
     }

     public function randevu()
     {
       return view('randevuPost');
     }

     public function randevuPost(Request $request)
     {
       Randevu::create($request->post());
       return redirect()->back()->with('basarili','İşlem Başarıyla Gerçekleşti');
     }

     public function hizmetler()
     {
       return view('hizmetler');
     }

}
