<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biller extends Model
{
    use HasFactory;

    public function biller()
    {
        return $this->belongsTo(User::class);
    }
}
