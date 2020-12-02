@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">
            Create new article
        </a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Size</th>
                <th scope="col">Weight</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>
                        <a href="{{ route('products.show', $product) }}">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td>{{ $product->size }}</td>
                    <td>{{ round($product->weight / 100, 2) }}</td>
                    <td>{{ '$' . round($product->price / 100, 2) }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form method="post" action="{{ route('products.destroy', $product) }}" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
