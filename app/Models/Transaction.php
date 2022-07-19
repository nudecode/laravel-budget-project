<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\DB;
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

    public function formatAmount($amount)
    {
        $value = money($amount, settings());
        return $value;
    }




}
