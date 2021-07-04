<a href="/selle/create">New Sale</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Part
            </th>
            <th>
                Quantity
            </th>
            <th>
                Total
            </th>
            <th>
                Customer
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($selles as $selle)
        <tr>
            <td>
                {{ $selle->id }}
            </td>
            <td>
                {{@$selle->part->title}}
            </td>
            <td>
                {{$selle->quantity}}
            </td>
            <td>
                {{ $selle->total }}
            </td>
            <td>
                {{ @$selle->customer->name }}
            </td>
            <td>
                <a href="/selle/{{ $selle->id }}">Show</a>
                <a href="/selle/{{ $selle->id }}/edit">Edit</a>
                <form method="POST" action="selle/{{ $selle->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
