@include('template.adminheader')
<br><br><br><br><br>
<h1 style="text-align: center">Admin Dashboard</h1>
<h2>All Products</h2>
<a href="/add-product" class="btn btn-primary mb-3">Add New Product</a>
<table border="1" class="table table-hover">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Created at</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->qty }}</td>
        <td>{{ $product->created_at }}</td>
        <td><img src="{{ $product->image }}" alt="{{ $product->name }}" width="100"> </td> <!-- Adjust width as needed -->
        <td><a href="/productDetails/{{ $product->id }}">VIEW DETAILS</a></td>
    </tr>
    @endforeach

</table>
{{ $products->links() }}

@include('template.footer')
