@extends('admin.dashboard')

@section('content')
<div class="container mt-4">
    <h2>📦 Products</h2>
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">➕ Create New Product</a>
    {{-- <a href="" class="btn btn-primary mb-3">➕ Create New Product</a> --}}

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- this is after then --}}
            {{-- @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">✏️ Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">🗑 Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach --}}
            <tr>
                <td>1</td>
                <td>Golden Puppy</td>
                <td>$99.99</td>
                <td>27</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">✏️ Edit</a>
                        <button type="button" class="btn btn-sm btn-danger">🗑 Delete</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Black Husky</td>
                <td>$120</td>
                <td>8</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">✏️ Edit</a>
                        <button type="button" class="btn btn-sm btn-danger">🗑 Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
