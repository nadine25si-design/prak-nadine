<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required',
            'service' => 'required',
            'pickup_date' => 'required|date',
            'address' => 'required',
        ]);

        Order::create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'service' => $request->service,
            'pickup_date' => $request->pickup_date,
            'address' => $request->address,
        ]);

        return redirect('/#form-pemesanan')->with('success', 'Pesanan berhasil disimpan!');
 }
    public function index()
{
    $orders = \App\Models\Order::latest()->get();
    
    return view('admin.orders', compact('orders'));
}
    public function updateStatus(Request $request, $id)
{
    $order = \App\Models\Order::findOrFail($id);
    
    $order->status = $request->status;
    $order->save();

    return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui!');
}
        }