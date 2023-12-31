<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable=[
        'name',
        'email',
        'rif',
        'address',
        'phone',
    ];
    public function productos(){
        return $this->hasMany(Producto::class);
}
}
