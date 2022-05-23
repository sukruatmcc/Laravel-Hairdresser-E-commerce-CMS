<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    use HasFactory;
    protected $table='sepet';
    protected $fillable=['user_id','urun_id','created_at','updated_at'];

    public function user()
    {
      return $this->belongsTo('App\Models\User');//kullanıcı bilgileri
    }

    public function urunler()
    {
      return $this->hasMany('App\Models\Urunler','user_id','user_id');//quiz bilgileri
    }
}
