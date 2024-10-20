<?php

namespace App\Models;

use App\Models\Game;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'game_id',
        'rental_date',
        'return_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}