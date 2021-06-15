<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

    protected $fillable = ['name', 'address'];

    public function printers() {
        return $this -> hasMany(Printer::class);
    }
}
