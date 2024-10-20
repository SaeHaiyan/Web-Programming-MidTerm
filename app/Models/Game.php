<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'price',
        'image',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'rentals')->withTimestamps();
    }
}