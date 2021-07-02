<a href="/part/create">New Part</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Title
            </th>
            <th>
                Quantity
            </th>
            <th>
                Price
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($parts as $part)
        <tr>
            <td>
                {{$part->id}}
            </td>
            <td>
                {{$part->title}}
            </td>
            <td>
                {{ $part->quantity }}
            </td>
            <td>
                {{ $part->price }}
            </td>
            <td>
                <a href="/part/{{ $part->id }}">Show</a>
                <a href="/part/{{ $part->id }}/edit">Edit</a>
                <form method="POST" action="part/{{ $part->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
