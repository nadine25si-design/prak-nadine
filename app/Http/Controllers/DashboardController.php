<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Sesuaikan dengan nama Model pesanan milikmu

class DashboardController extends Controller
{
    public function index()
{
    // 1. Total semua pesanan yang ada di database
    $totalOrders = \App\Models\Order::count();

    // 2. Hitung berdasarkan status
    $pendingOrders = \App\Models\Order::where('status', 'Menunggu Konfirmasi')->count();
    $completedOrders = \App\Models\Order::where('status', 'Selesai')->count();

    // 3. Pesanan hari ini
    $todayOrdersCount = \App\Models\Order::whereDate('created_at', today())->count();

    // 4. Ambil semua pesanan terbaru
    $recentOrders = \App\Models\Order::latest()->get();

    return view('admin.dashboard', compact(
        'totalOrders',
        'pendingOrders',
        'completedOrders',
        'todayOrdersCount',
        'recentOrders'
    ));
}
}