<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Haber extends Model
{
    protected $table="haberler";

    protected $fillable=['baslik','aciklama','user_id','icerik'];
    
}
