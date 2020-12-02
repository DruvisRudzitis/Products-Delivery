@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="{{ route('products.update', $product) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Product name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="content">Size:</label>
                <textarea class="form-control" name="size" id="size">{{ $product->size }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Weight:</label>
                <textarea class="form-control" name="weight" id="weight">{{ $product->weight }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Price:</label>
                <textarea class="form-control" name="price" id="price">{{ $product->price }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
