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


    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public static function topClients()
    {
        // get clients with orders
        $Clients = Client::with('order')
            ->get();

        // map over clients to return data with totalSpent
        $ClientsData = $Clients->map(function ($client) {
            return [
                'id' => $client->id,
                'name' => $client->name,
                'email' => $client->email,
                'phone' => $client->phone,
                'totalSpent' => $client->order->sum('price'),
            ];
        });

        // Take the best 10 client and re-index them with values()
        return $ClientsData->sortByDesc('totalSpent')->values()->take(10);

    }
}
