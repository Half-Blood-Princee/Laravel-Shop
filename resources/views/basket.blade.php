@extends('layouts.master')

@section('content')
    <h1 class="text-warning">Корзина</h1>
    <table class="table table-dark text-warning table-striped">
        <thead>
        <th>Назва</th>
        <th>Кількість</th>
        <th>Ціна</th>
        <th>Повна вартість</th>
        </thead>
        <tbody>
        @foreach($order->products as $product)
            <tr>
                <td>
                    {{$product->name}}
                </td>
                <td>
                    <span class="badge bg-info">1</span>
                    <div class="btn-group">$orderId = session('orderId');
                        <button type="button" class="btn btn-danger">-</button>
                        <button type="button" class="btn btn-success">+</button>
                    </div>
                </td>
                @endforeach
                <td>
                    price
                </td>
                <td>
                    full price
                </td>
            </tr>
        </tbody>
    </table>

    <a role="button" class="btn btn-success" href="/order">Сформувати замовлення</a>

@endsection
