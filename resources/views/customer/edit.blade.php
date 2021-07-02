<form action="/customer" method="POST">
    @csrf
    <div>
        <label for="title">Name</label>
        <input type="text" value="{{ $customer->name }}" name="name">
    </div>
    <div>
        <label for="title">Phone</label>
        <input type="text" value="{{ $customer->phone }}" name="phone">
    </div>
    <button type= "submit">Save</button>
</form>
