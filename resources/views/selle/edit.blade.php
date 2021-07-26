@extends('layout')

@section('content')
<form action="/selle/{{ $selle->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="part_id">Part</label>
        <select name="part_id">
            @foreach ($parts as $part)
                <option
                    {{ $selle->part_id==$part->id?'selected':'' }}
                    value="{{ $part->id }}">
                    {{ $part->title }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="text" value="{{ $selle->quantity }}" name="quantity">
    </div>
    <div>
        <label for="total">Total</label>
        <input type="text" value="{{ $selle->total }}" name="total">
    </div>
    <div>
        <label for="customer_id">Customer</label>
        <select name="customer_id">
            @foreach ($customers as $customer)
                <option
                    {{ $selle->customer_id==$customer->id?'selected':'' }}
                    value="{{ $customer->id }}">
                    {{ $customer->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type= "submit">Save</button>
</form>
@endsection
