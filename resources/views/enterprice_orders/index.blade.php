@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Lista de Pedidos de Empresa</h2>

    <a href="{{ route('enterprise_orders.create') }}" class="btn btn-primary mb-3">Nuevo Pedido</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th># Orden</th>
                <th>Contacto Proveedor</th>
                <th>Fecha</th>
                <th>Dirección de Entrega</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->orderNumber }}</td>
                    <td>{{ $order->supplierContact }}</td>
                    <td>{{ $order->orderDate }}</td>
                    <td>{{ $order->deliveryAddress }}</td>
                    <td>${{ number_format($order->totalAmount, 2) }}</td>
                    <td>
                        <span class="badge 
                            @if($order->status == 'ORDERED') badge-secondary 
                            @elseif($order->status == 'IN_PROCESS') badge-warning 
                            @elseif($order->status == 'IN_ROUTE') badge-info 
                            @elseif($order->status == 'DELIVERED') badge-success 
                            @endif">
                            {{ $order->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('enterprise_orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('enterprise_orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este pedido?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay pedidos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
