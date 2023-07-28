<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        return Inertia::render('Dashboard/Index', [
            'weekIncome' => Order::getTotalIncomeLastWeek(),
            'monthIncome' => Order::getTotalIncomeLastMonth(),
            'yearIncome' => Order::getTotalIncomeLastYear(),
            'ordersCount' => Order::onGoingOrdersCount(),
            'orders' => Order::latest()->with(['client', 'product' , 'statut'])->where('statut_id', 1)->paginate(10),
            'topClients' => Client::topClients(),
        ]);
    }
}
