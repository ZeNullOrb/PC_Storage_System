<form action="/customer" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone">
    </div>
    <button type= "submit">Save</button>
</form>
