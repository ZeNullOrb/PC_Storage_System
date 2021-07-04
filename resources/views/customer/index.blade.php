<a href="/customer/create">New Customer</a>
<table>
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Phone
            </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>
                {{$customer->id}}
            </td>
            <td>
                {{$customer->name}}
            </td>
            <td>
                {{ $customer->phone }}
            </td>
            <td>
                <a href="/customer/{{ $customer->id }}">Show</a>
                <a href="/customer/{{ $customer->id }}/edit">Edit</a>
                <form method="POST" action="customer/{{ $customer->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
