<?php

namespace App\Models;

use App\Models\Budget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BudgetItem extends Model
{
    use HasFactory;

    public function budgets()
    {
        return $this->belongsTo(Budget::class);
    }
}
