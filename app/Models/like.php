<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo->user();
    }
    public function post()
    {
        return $this->belongsTo->post();
    }
}