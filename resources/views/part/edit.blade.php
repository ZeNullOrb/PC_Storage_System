<form action="/part" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" value="{{ $part->title }}" name="title">
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="text" value="{{ $part->quantity }}" name="quantity">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" value="{{ $part->price }}" name="price">
    </div>
    <button type= "submit">Save</button>
</form>
