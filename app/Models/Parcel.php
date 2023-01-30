<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status_id',
    ];

    public function sender()
    {
      return $this->belongsTo(User::class, 'sender_id');
    }

    public function status()
    {
      return $this->belongsTo(ParcelStatus::class, 'status_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
