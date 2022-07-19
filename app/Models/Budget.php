<?php

namespace App\Models;

use App\Models\User;
use App\Models\BudgetItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Budget extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
