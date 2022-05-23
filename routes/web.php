<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MusterilerController;
use App\Http\Controllers\UrunlerController;


Route::get('/', function () {
    return view('welcome');
});
//main controller->dashboard
Route::middleware(['middleware'=>'auth'])->prefix('panel')->group(function(){
  Route::get('/',[MainController::class,'dashboard'])->name('panel');
  Route::get('/urunlerimiz',[MainController::class,'purunler'])->name('purunler');
  Route::get('/contact/',[MainController::class,'iletisim'])->name('contact');
  Route::post('/contactPost/',[MainController::class,'iletisimPost'])->name('contact.post');
  Route::post('/urunPost/',[MainController::class,'urunPost'])->name('urun.post');
  Route::get('/sepet/',[MainController::class,'sepet'])->name('sepett');
  Route::get('/iptal/{id}',[MainController::class,'iptal'])->name('iptal');
  Route::post('/siparis',[MainController::class,'siparis'])->name('sepet');
  Route::get('/about',[MainController::class,'about'])->name('about');
  Route::get('/randevu',[MainController::class,'randevu'])->name('randevu');
  Route::post('/randevuPost',[MainController::class,'randevuPost'])->name('randevu.post');
  Route::get('/services',[MainController::class,'hizmetler'])->name('hizmetler');
});
//main Controller





Route::middleware(['auth:sanctum', 'İsAdmin'])->prefix("yonetim")->group(function(){//sadece admin girer
     Route::get('/musteriler',[MusterilerController::class,'musteriler'])->name('musteri.list');
     Route::get('/urunler/{id}',[UrunlerController::class,'urunler'])->name('urunler.list');
     Route::get('/tum_urunler',[UrunlerController::class,'tum_urunler'])->name('tum.urunler');
     Route::get('/urun_olustur',[UrunlerController::class,'urun_olustur'])->name('urun.olustur');
     Route::post('/urun_olusturPost',[UrunlerController::class,'urun_olusturPost'])->name('urun.olusturPost');
     Route::get('/urun_bilgisi/{id}',[UrunlerController::class,'urun_bilgisi'])->name('urun.bilgi');
     Route::get('/urun_satis_bilgisi/{id}',[UrunlerController::class,'urun_satis_bilgisi'])->name('urun.satis');
     Route::get('/urun_guncelle/{id}',[UrunlerController::class,'urun_guncelle'])->name('urun.guncelle');
     Route::post('/urun_guncellePost/{id}',[UrunlerController::class,'urun_guncellePost'])->name('urun.guncellePost');
     Route::get('/urun_sil/{id}',[UrunlerController::class,'urun_sil'])->name('urun.sil');
     Route::get('/randevu_control/{id}',[MusterilerController::class,'randevu'])->name('randevu.control');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
