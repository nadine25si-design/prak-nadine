<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('name');
            $table->string('whatsapp');
            $table->string('service');
            $table->date('pickup_date');
            $table->text('address');
            $table->string('status')->default('Menunggu Konfirmasi');
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'whatsapp',
                'service',
                'pickup_date',
                'address',
                'status',
            ]);
        });
    }
};