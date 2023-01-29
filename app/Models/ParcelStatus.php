<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelStatus extends Model
{
    use HasFactory;

    protected $appends = [
        'status_color',
    ];

    public function getStatusColorAttribute($value) {
      $color = null;
      if($this->id == 1)
        $color = "badge-secondary";
      else if($this->id == 2)
        $color = "badge-info";
      else if($this->id == 3)
        $color = "badge-warning";
      else if($this->id == 4)
        $color = "badge-success";
      return $color;
    }
}
