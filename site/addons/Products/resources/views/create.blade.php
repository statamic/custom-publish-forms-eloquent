@extends('layout')

@section('content')

    <script>
        Statamic.Publish = {
            contentData: {!! json_encode($data) !!},
        };
    </script>

    <publish
        fieldset-name="product"
        :is-new="true"
        title="New Product"
        submit-url="{{ route('products.store') }}"
    ></publish>

@endsection
