<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;
    protected $table='randevu';
    protected $fillable=['user_id','isim','email','tel_no','kategori','created_at','updated_at'];

    public function getUser()
    {
      return $this->hasMany('App\Models\User','id','user_id');
    }
}
