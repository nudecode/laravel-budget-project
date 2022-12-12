<?php

namespace App\Models;

use App\Models\User;
use PostScripton\Money\Money;
use Illuminate\Support\Facades\DB;
use PostScripton\Money\MoneySettings;
use Illuminate\Database\Eloquent\Model;
use PostScripton\Money\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
    protected $fillable = [
        'name',
        'amount',
        'user_id',
    ];

     /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'amount' => MoneyCast::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function formatAmount()
    {
        $income = $this->amount->toString();
        return money($income, settings());
    }

    public function income($values)
    {
        // $value = money($value, settings());
        // return $value;

        $moneyIncome = Money::sum($values->amount);
        dd($moneyIncome);

        $income = 0;

        foreach($values as $value) {
            $value->sum('amount');

            $income = $value;
        }

        return $income;


    }
}
