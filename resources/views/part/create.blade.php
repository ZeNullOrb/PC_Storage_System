@extends('layout')

@section('content')
<form action="/part" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input class="rounded border border-green-500 bg-green-100 text-green-800" type="text" name="title">
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input class="rounded border border-green-500 bg-green-100 text-green-800" type="text" name="quantity">
    </div>
    <div>
        <label for="price">Price</label>
        <input class="rounded border border-green-500 bg-green-100 text-green-800" type="text" name="price">
    </div>
    <button type= "submit">Save</button>
</form>
@endsection
