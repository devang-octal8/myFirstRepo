<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function bussiness(){
        return $this->belongsTo(Bussiness::class);
    }
    use HasFactory;

    protected $fillable = [
        'bussiness_id',
        'name',
        'email',
        'address',
        'created_user',
    ];
}
