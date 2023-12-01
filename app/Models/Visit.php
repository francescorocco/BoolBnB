<?php

namespace App\Models;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visit extends Model
{

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class);
    }


    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'id',
        'date',
        'text',
    ];
}
