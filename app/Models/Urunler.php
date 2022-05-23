<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    use HasFactory;
    protected $table='urunler';
    protected $fillable=['user_id','urun_adi','description','slug','image','fiyat','created_at','updated_at'];

    public function getUser()
    {
      return $this->hasMany('App\Models\User','id','user_id');
    }

    public function sepetGet()
    {
      return $this->hasMany('App\Models\Sepet','urun_id','id');
    }


}
