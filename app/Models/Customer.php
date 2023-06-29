<?php

namespace App\Models;

use App\Models\Bts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function bts(){
        return $this->belongsTo(Bts::class,'id_bts','id');
    }
}
