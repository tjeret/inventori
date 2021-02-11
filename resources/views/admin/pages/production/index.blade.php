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
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#resep">
                Tambah Resep
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#resep-details">
                Tambah Resep Details
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
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

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
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->recipt->name }}</td>
                                        <td>{{ $item->material->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Jenis</th>
                                    <th>Reason</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    {{-- @include('admin.pages.production.modal') --}}
@endsection

@section('addCss')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" />
@endsection

@section('addJs')
    <script src="{{ asset('vendor') }}/dist/js/select.js"></script>
    {{-- @include('admin.pages.production.add') --}}
@endsection
