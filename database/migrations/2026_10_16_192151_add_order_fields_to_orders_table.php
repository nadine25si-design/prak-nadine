<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('orders', 'whatsapp')) {
                $table->string('whatsapp');
            }
            if (!Schema::hasColumn('orders', 'service')) {
                $table->string('service');
            }
            if (!Schema::hasColumn('orders', 'pickup_date')) {
                $table->date('pickup_date');
            }
            if (!Schema::hasColumn('orders', 'address')) {
                $table->text('address');
            }
            if (!Schema::hasColumn('orders', 'status')) {
                $table->string('status')->default('Menunggu Konfirmasi');
            }
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