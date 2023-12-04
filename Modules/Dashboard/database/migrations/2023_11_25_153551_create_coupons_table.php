<?php

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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->date('start_at');
            $table->date('end_at_at');
            $table->string('code')->unique();
            $table->enum('type',['fixed','percent'])->default('fixed');
            $table->decimal('value',20,2);
            $table->string('link')->nullable();
            $table->enum('status',['active','inactive', 'expired'])->default('inactive');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
