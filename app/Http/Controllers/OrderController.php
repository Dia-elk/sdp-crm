<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Statut;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Inertia::render('Orders/Index',[
            'orders' => Order::with(['client', 'product' , 'statut'])
                ->when($request->input('statut'), function ($query, $statut) {
                    // Access the "statut" relationship within the closure and apply the filter
                    $query->whereHas('statut', function ($statutQuery) use ($statut){
                        $statutQuery->where('name', 'like', "%{$statut}%");
                    });
                })
                ->paginate(30),
            'statuts' => Statut::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return Inertia::render('Orders/Show',[
            'order' => Order::with('client.address', 'product','statut','user')->where('id',$id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
