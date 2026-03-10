<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function kit() {
    return $this->belongsTo(Kit::class);
}

public function groups() {
    return $this->belongsToMany(Group::class);
}
}
