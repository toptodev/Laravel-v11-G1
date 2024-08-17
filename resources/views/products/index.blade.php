<h1>สินค้าของเรา</h1>

<table border="1">
		@foreach ($products as $index => $product)
				<tr>
						<td>
								<a href="{{ route('products.show', $index) }}">{{ $product['name'] }}</a>
						</td>
						<td>{{ $product['price'] }}</td>
						<td><img src="{{ $product['image'] }}"></td>
				</tr>
		@endforeach
</table>
