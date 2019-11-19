<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //disable mass-asignment protection
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/ulnMr37wODrZQPqBBhGG6phRTyAmw5yIcW2W8UDQ.jpeg';
         return '/storage/' . $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function followers() {
        return $this->belongsToMany(User::class);        
    }
}
