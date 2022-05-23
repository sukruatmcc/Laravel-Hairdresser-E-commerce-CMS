<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Randevu;

class MusterilerController extends Controller
{
    public function musteriler()
    {
      $datas=User::paginate(5);
      return view('admin.musteri_list',compact('datas'));
    }

    public function randevu($id)
    {
      $datas=User::whereId($id)->with('getRandevu')->first() ?? abort(403,'Randevu Bulunamadı');
      return view('admin.randevu',compact('datas'));
    }

}
