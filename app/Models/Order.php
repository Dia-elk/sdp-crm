<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price',
    ];

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function file():BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function statut():BelongsTo
    {
        return $this->belongsTo(Statut::class);
    }
}
