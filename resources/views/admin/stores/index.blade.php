@extends('layouts.app')

@section('content')
    @if (!$store)
        <a href="{{ route('admin.stores.create') }}" class="btn btn-lg btn-success">Criar loja</a>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Store</th>
                <th>Products count</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->products->count() }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}" class="btn btn-small btn-primary text-uppercase">Editar</a>

                        <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-small btn-danger text-uppercase">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
