<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bussiness extends Model
{
    use HasFactory;

    public function locations(){
        return $this->hasMany(Location::class);
    }

    protected $fillable = [
        'name',
        'logo',
        'email',
        'address',
        'created_user',
    ];

}
