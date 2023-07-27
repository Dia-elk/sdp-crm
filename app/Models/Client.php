<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;


    public function address() : BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function order():HasMany
    {
        return $this->hasMany(Order::class);
    }
}
