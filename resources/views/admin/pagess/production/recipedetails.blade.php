@extends('admin.app')

@section('title')
    Transaksi Bahan Baku
@endsection

@section('content')
    <form action="{{ route('production.recipe') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="Name">Nama Resep</label>
                <select type="name" class="form-control" name="id_recipe">
                    @foreach ($recipe as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="resep">Bahan 1</label>
                <select id="selectpicker" class="selectpicker form-control" data-live-search="true">
                    @foreach ($product as $items)
                        <option value="{{ $items->id }}">{{ $items->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="resep">Bahan 2</label>
                <select id="selectpicker" class="selectpicker form-control" data-live-search="true">
                    @foreach ($product as $items)
                        <option value="{{ $items->id }}">{{ $items->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>
@endsection
