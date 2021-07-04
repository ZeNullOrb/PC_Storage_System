<h1>Part Name: {{ @$selle->part->title }}</h1>
<p>Selles Quantity #{{ $selle->quantity }}</p>
<p>Sale Total: {{ $selle->total }}$</p>
<p>Customer Name: {{ @$selle->customer->name }}</p>
<a href="/selle">Back To Main Selles List</a>
