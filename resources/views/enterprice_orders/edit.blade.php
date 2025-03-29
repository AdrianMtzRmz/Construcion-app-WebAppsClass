@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Pedido</h2>
    <form action="{{ route('enterprise_orders.update', $enterpriseOrder->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Contacto Proveedor:</label>
            <input type="text" name="supplierContact" class="form-control" value="{{ $enterpriseOrder->supplierContact }}" required>
        </div>
        <div class="form-group">
            <label>Fecha:</label>
            <input type="date" name="orderDate" class="form-control" value="{{ $enterpriseOrder->orderDate }}" required>
        </div>
        <div class="form-group">
            <label>Dirección de Entrega:</label>
            <input type="text" name="deliveryAddress" class="form-control" value="{{ $enterpriseOrder->deliveryAddress }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
