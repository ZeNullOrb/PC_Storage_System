@extends('layout')

@section('content')
<h1>Part Name: {{ @$part->title }}</h1>
<p>Part Quantity #{{ $part->quantity }}</p>
<p>Part Price: {{ $part->price }}$</p>
<a href="/customer">Back To Main Part List</a>
@endsection
