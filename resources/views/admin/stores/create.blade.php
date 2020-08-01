@extends('layouts.app')

@section('content')
    <h1>Criar loja</h1>

    <form action="{{ route('admin.stores.store') }}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="tel" name="phone" class="form-control">
        </div>

        <div class="form-group">
            <label>Celular/WhatsApp</label>
            <input type="tel" name="mobile_phone" class="form-control">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-success btn-lg">Criar loja</button>
        </div>
    </form>
@endsection
