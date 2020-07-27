@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.stores.create') }}" class="btn btn-lg btn-success">Criar loja</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Store</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td>{{ $store->name }}</td>
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
            @endforeach
        </tbody>
    </table>

{{ $stores->links() }}
@endsection
