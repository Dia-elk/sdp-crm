<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = Client::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            })
            ->with('order')
            ->withSum('order','price')
            ->withCount('order')
            ->orderByDesc('order_sum_price')
            ->paginate()
            ->withQueryString()
            ->through(function ($client) {
               return [
                    'id' => $client->id,
                    'name' => $client->name,
                    'email' => $client->email,
                    'phone' => $client->phone,
                    'ordersCount' => $client->order_count,
                    'totalSpent' => $client->order_sum_price,
                ];
            });
        return Inertia::render('Clients/Index', [
            'clients' => $clients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Clients/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       Client::with('order.product' , 'address')->where('id',$id)->first();
        return Inertia::render('Clients/Show', [
            'client' => Client::with('order.product' , 'order.statut' , 'address')->where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Client::with('order.product' , 'address')->where('id',$id)->first();
        return Inertia::render('Clients/Edit', [
            'client' => Client::with( 'address')
                ->withCount('order')
                ->where('id',$id)
                ->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sleep(1);
        Client::destroy($id);
        return to_route('clients.index')->with('message','the client has been deleted');
    }
}
