<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public function kit() {
        return $this->belongsTo(Kit::class);
    }

    public function groups() {
        return $this->belongsToMany(Group::class);
    }
}