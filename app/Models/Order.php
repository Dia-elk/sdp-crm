<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Array_;

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

    public  static function getTotalIncomeLastWeek(): array
    {
        $currentWeekStartDate = Carbon::now()->startOfWeek();
        $currentWeekEndDate = Carbon::now()->endOfWeek();

        $lastWeekStartDate = Carbon::now()->subWeek()->startOfWeek();
        $lastWeekEndDate = Carbon::now()->subWeek()->endOfWeek();

        $currentWeekIncome = Order::whereBetween('created_at', [$currentWeekStartDate, $currentWeekEndDate])
            ->sum('price');

        $lastWeekIncome = Order::whereBetween('created_at', [$lastWeekStartDate, $lastWeekEndDate])
            ->sum('price');

        $percentageDifference = 0;
        if ($lastWeekIncome !== 0) {
            $percentageDifference = (($currentWeekIncome - $lastWeekIncome) / $lastWeekIncome) * 100;
        }

        return [
            'currentIncome' => $currentWeekIncome,
            'lastIncome' => $lastWeekIncome,
            'percentage' => $percentageDifference,
        ];
    }

    public  static function getTotalIncomeLastMonth(): array
    {
        $currentMonthStartDate = Carbon::now()->startOfMonth();
        $currentMonthEndDate = Carbon::now()->endOfMonth();

        $lastMonthStartDate = Carbon::now()->subMonth()->startOfMonth();
        $lastMonthEndDate = Carbon::now()->subMonth()->endOfMonth();

        $currentMonthIncome = Order::whereBetween('created_at', [$currentMonthStartDate, $currentMonthEndDate])
            ->sum('price');

        $lastMonthIncome = Order::whereBetween('created_at', [$lastMonthStartDate, $lastMonthEndDate])
            ->sum('price');

        $percentageDifference = 0;
        if ($lastMonthIncome !== 0) {
            $percentageDifference = (($currentMonthIncome - $lastMonthIncome) / $lastMonthIncome) * 100;
        }

        return [
            'currentIncome' => $currentMonthIncome,
            'lastIncome' => $lastMonthIncome,
            'percentage' => $percentageDifference,
        ];
    }

    public  static function getTotalIncomeLastYear(): array
    {
        $currentYearStartDate = Carbon::now()->startOfYear();
        $currentYearEndDate = Carbon::now()->endOfYear();

        $lastYearStartDate = Carbon::now()->subYear()->startOfYear();
        $lastYearEndDate = Carbon::now()->subYear()->endOfYear();

        $currentYearIncome = Order::whereBetween('created_at', [$currentYearStartDate, $currentYearEndDate])
            ->sum('price');

        $lastYearIncome = Order::whereBetween('created_at', [$lastYearStartDate, $lastYearEndDate])
            ->sum('price');

        $percentageDifference = 0;
        if ($lastYearIncome !== 0) {
            $percentageDifference = (($currentYearIncome - $lastYearIncome) / $lastYearIncome) * 100;
        }

        return [
            'currentIncome' => $currentYearIncome,
            'lastIncome' => $lastYearIncome,
            'percentage' => $percentageDifference,
        ];
    }
    public static function onGoingOrdersCount()
    {
        return Order::where('statut_id',1)->count();
    }
}
