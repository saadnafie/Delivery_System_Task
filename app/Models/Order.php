<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function biker(){
      return $this->belongsTo(User::class, 'biker_id');
    }

    public function parcel(){
      return $this->belongsTo(Parcel::class, 'parcel_id');
    }
}
