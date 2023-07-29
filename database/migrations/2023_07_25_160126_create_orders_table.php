<?php

use App\Models\Client;
use App\Models\File;
use App\Models\Product;
use App\Models\Statut;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained('products');
            $table->foreignIdFor(File::class)->constrained('files');
            $table->foreignIdFor(User::class)->constrained('users');
            $table->foreignIdFor(Client::class)->constrained('clients')->cascadeOnDelete();
            $table->foreignIdFor(Statut::class)->constrained('statuts');
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
