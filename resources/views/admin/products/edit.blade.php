@extends('layouts.app')

@section('content')
    <h1>Atualizar produto</h1>

    <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nome produto</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{ $product->description }}">
        </div>

        <div class="form-group">
            <label>Conteúdo do produto</label>
            <textarea name="body" rows="5" class="form-control">{{ $product->body }}</textarea>
        </div>

        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $product->slug }}">
        </div>

        <div>
            <button type="submit" class="btn btn-success btn-lg">Atualizar produto</button>
        </div>
    </form>
@endsection
