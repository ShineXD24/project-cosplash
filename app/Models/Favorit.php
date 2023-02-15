<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['pict','name','price','rating','category'];

    public function arrival(){
        return $this->hasMany(Arrival::class);
    }
}
