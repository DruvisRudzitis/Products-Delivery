@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
            </div>
            <div class="form-group">
                <label for="sizet">Size:</label>
                <textarea class="form-control" name="size" id="size"></textarea>
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <textarea class="form-control" name="weight" id="weight"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <textarea class="form-control" name="price" id="price"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
