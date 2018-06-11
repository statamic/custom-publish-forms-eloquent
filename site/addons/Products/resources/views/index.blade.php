@extends('layout')

@section('content')

    <a href="{{ route('products.create') }}">Create Product</a>

    @foreach ($products as $product)
        <li><a href="{{ route('products.edit', ['product' => $product->id]) }}">{{ $product->title }}</a></li>
    @endforeach

@endsection
