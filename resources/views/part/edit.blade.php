@extends('layout')

@section('content')

<form action="/part" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input class="rounded border border-gray-200 mr-1" type="text" value="{{ $part->title }}" name="title">
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input class="rounded border border-gray-200 mr-1" type="text" value="{{ $part->quantity }}" name="quantity">
    </div>
    <div>
        <label for="price">Price</label>
        <input class="rounded border border-gray-200 mr-1" type="text" value="{{ $part->price }}" name="price">
    </div>
    <button class="p-1 m-1rounded border border-green-500 bg-green-100 text-green-800" type= "submit">Save</button>
</form>
@endsection
