@extends('layout')

@section('content')

    <script>
        Statamic.Publish = {
            contentData: {!! json_encode($data) !!},
        };
    </script>

    <publish
        fieldset-name="product"
        id="{{ $product->id }}"
        title="{{ $product->title }}"
        submit-url="{{ route('products.update', ['product' => $product]) }}"
    ></publish>

@endsection
