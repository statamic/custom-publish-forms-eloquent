@extends('layout')

@section('content')

    <div class="flex items-center mb-3">
        <h1 class="flex-1">Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
    </div>
    <div class="card flush dossier">
        <div class="dossier-table-wrapper">
            <table class="dossier">
                <thead>
                    <tr>
                        <th class="column-title">Title</th>
                        <th class="column-slug">Slug</th>
                        <th class="column-date">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td class="cell-title first-cell">
                            <span class="column-label">Title</span>
                            <a class="" href="{{ route('products.edit', ['product' => $product->id]) }}">
                                {{ $product->title }}
                            </a>
                        </td>
                        <td class="cell-slug">
                            <span>{{ $product->slug }}</span>
                        </td>
                        <td class="cell-date">{{ $product->created_at->format('Y/m/d')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
