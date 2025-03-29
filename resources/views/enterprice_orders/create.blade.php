@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Nuevo Pedido</h2>
    <form action="{{ route('enterprise_orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Contacto Proveedor:</label>
            <input type="text" name="supplierContact" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Fecha:</label>
            <input type="date" name="orderDate" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Dirección de Entrega:</label>
            <input type="text" name="deliveryAddress" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Estado:</label>
            <select name="status" class="form-control">
                <option value="ORDERED">ORDERED</option>
                <option value="IN_PROCESS">IN PROCESS</option>
                <option value="IN_ROUTE">IN ROUTE</option>
                <option value="DELIVERED">DELIVERED</option>
            </select>
        </div>
        <div class="form-group">
            <label>Total:</label>
            <input type="number" step="0.01" name="totalAmount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
