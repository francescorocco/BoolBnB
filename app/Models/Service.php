<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function apartments()
    {
        return $this->belongsToMany('App\Models\Apartment');
    }

    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
