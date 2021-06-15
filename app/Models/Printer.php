<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
   protected $fillable = ['name','provider_id', 'print_res', 'price'];

   public function provider() {
        return $this->belongsTo(Provider::class);
   }
}
