<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnterpriseOrder;

class EnterpriseOrderController extends Controller
{
    public function index()
    {
        $orders = EnterpriseOrder::where('isDeleted', false)->get();
        return view('enterprise_orders.index', compact('orders'));
    }

    public function create()
    {
        return view('enterprise_orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplierContact' => 'required',
            'orderDate' => 'required|date',
            'deliveryAddress' => 'required',
            'status' => 'required',
            'totalAmount' => 'required|numeric',
        ]);

        EnterpriseOrder::create($request->all());

        return redirect()->route('enterprise_orders.index')->with('success', 'Pedido creado exitosamente');
    }

    public function edit(EnterpriseOrder $enterpriseOrder)
    {
        return view('enterprise_orders.edit', compact('enterpriseOrder'));
    }

    public function update(Request $request, EnterpriseOrder $enterpriseOrder)
    {
        $request->validate([
            'supplierContact' => 'required',
            'orderDate' => 'required|date',
            'deliveryAddress' => 'required',
            'status' => 'required',
            'totalAmount' => 'required|numeric',
        ]);

        $enterpriseOrder->update($request->all());

        return redirect()->route('enterprise_orders.index')->with('success', 'Pedido actualizado exitosamente');
    }

    public function destroy(EnterpriseOrder $enterpriseOrder)
    {
        $enterpriseOrder->update(['isDeleted' => true]);
        return redirect()->route('enterprise_orders.index')->with('success', 'Pedido eliminado');
    }
}
