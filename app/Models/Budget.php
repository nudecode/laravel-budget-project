<?php

namespace App\Models;

use App\Models\User;
use App\Models\BudgetItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Budget extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return BudgetItem::where('budget_id', $this->budget_id);
    }


}
