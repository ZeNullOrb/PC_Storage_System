@extends('layout')

@section('content')
<form action="/selle" method="POST">
    @csrf
    <div>
        <label for="part_id">Part</label>
        <select name="part_id">
            @foreach ($parts as $part)
            <option value="{{ $part->id }}">
                {{ $part->title }}
            </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity">
    </div>
    <div>
        <label for="total">Total</label>
        <input type="text" name="total">
    </div>
    <div>
        <label for="customer_id">Customer</label>
        <select name="customer_id">
            @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">
                {{ $customer->name }}
            </option>
            @endforeach
        </select>
    </div>
    <button type= "submit">Save</button>
</form>
@endsection
