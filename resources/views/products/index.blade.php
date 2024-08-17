<h1>สินค้าของเรา</h1>

<table border="1">
@foreach ($products as $product)
		<tr>
				<td>{{ $product['name'] }}</td>
				<td>{{ $product['price'] }}</td>
				<td><img src="{{ $product['image'] }}"></td>
		</tr>
@endforeach
</table>
