<?php

namespace App\Models;

use App\Models\User;
use App\Models\Visit;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apartment extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->belongsToMany('App\Models\service');
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function sponsorships()
    {
        return $this->belongsToMany('App\Models\Sponsorship');
    }



    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'rooms',
        'beds',
        'bathrooms',
        'mq',
        'address',
        'lat',
        'lon',
        'photo',
        'visible'
    ];
}
