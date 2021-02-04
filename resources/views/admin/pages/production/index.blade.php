@extends('admin.app')

@section('title')
    Transaksi Bahan Baku
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Tambah Produk
            </button>
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-primary wow fadeInUp" data-wow-delay="0.7s">
                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <span>
                                {{ Session::get('message') }}
                            </span>
                        </div>
                    @endif
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Jenis</th>
                                <th>Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dump($product) }} --}}
                            @foreach ($product as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>{{ $item->stock->debit }}</td>
                                    <td>{{ $item->type->name }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    @include('admin.pages.production.modal')
@endsection
