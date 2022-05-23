<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class İletisim extends Model
{
    use HasFactory;
    protected $table='iletisim';
    protected $fillable=['name','email','questions','number','created_at','updated_at'];
}
