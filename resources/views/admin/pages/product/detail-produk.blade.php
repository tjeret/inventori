@extends('admin.app')

@section('title')
    Product
@endsection


@section('content')
<table>
    <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Produk</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            {{dump($product)}}
            @foreach ($product as $item)

            @endforeach
        </tr>
    </tbody>
</table>
@endsection
