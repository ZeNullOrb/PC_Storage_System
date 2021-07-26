@extends('layout')

@section('content')

<a class="mb-3 py-2 px-5 rounded bg-gray-200 text-gray-800" href="/part/create">New Part</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th class="w-4/5 text-center">
                Title
            </th>
            <th class="w-4/5 text-center">
                Quantity
            </th>
            <th class="w-4/5 text-center">
                Price
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($parts as $part)
        <tr>
            <td>
                {{ $part->id }}
            </td>
            <td>
                {{ $part->title }}
            </td>
            <td>
                {{ $part->quantity }}
            </td>
            <td>
                {{ $part->price }}
            </td>
            <td>
                <a class="p-1 m-1 rounded border border-green-500 bg-green-100 text-green-800" href="/part/{{ $part->id }}">Show</a>
                <a class="p-1 m-1 rounded border border-blue-500 bg-blue-100 text-blue-800" href="/part/{{ $part->id }}/edit">Edit</a>
                <form method="POST" action="part/{{ $part->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-1 m-1 rounded border border-red-500 bg-red-100 text-red-800">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
