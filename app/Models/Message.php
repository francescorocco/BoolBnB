<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function Apartments()
    {
        return $this->belongsToMany(Apartment::class);
    }



    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'name',
        'lastname',
        'email',
        'text',
    ];
}
