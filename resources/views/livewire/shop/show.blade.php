<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: ₹{{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>
<img src="{{ asset('images/' . $product->image) }}" width="300" />