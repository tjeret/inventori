@extends('admin.app')

@section('title')
    Product
@endsection

@section('content-header')
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Table View</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Table view</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content2')
<div class="card">
    <div class="class-header">
        <div class="row ml-2">
            <div class="col-md-2 btn-grup">
                <button type="button" class="btn btn-warning"><i class="fas fa-print" aria-hidden="true">Print</i></button>
                <button type="button" class="btn btn-warning "><i class="fas fa-plus" aria-hidden="true">Tambah</i></button>
            </div>
        <div class="col-md">
            <div class="input-group mb-3">
                <input type="text" class="search form-control" placeholder="Input Data" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
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
                    <td>1</td>
                    <td>HTML Nama 1</td>
                    <td>HTML Produk 1</td>
                    <td>HTML Kategori 1</td>
                    <td>HTML Jumlah 1</td>
                    <td>HTML Harga 1</td>
                    <td>
                        <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                    @foreach ($product as $item)

                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('content')
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: auto;">
                <table class="table table-head-fixed text-nowrap table-bordered">
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
                            <td>1</td>
                            <td>HTML Nama 1</td>
                            <td>HTML Produk 1</td>
                            <td>HTML Kategori 1</td>
                            <td>HTML Jumlah 1</td>
                            <td>HTML Harga 1</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                            @foreach ($product as $item)

                            @endforeach
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>HTML Nama 2</td>
                            <td>HTML Produk 2</td>
                            <td>HTML Kategori 2</td>
                            <td>HTML Jumlah 2</td>
                            <td>HTML Harga 2</td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @foreach ($product as $item)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{ $item->type->name }}
                                </td>
                                <td>
                                    {{ $item->stock->credit }}
                                </td>
                                <td>
                                    {{ $item->user->username }}
                                </td>
                                <td>
                                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
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
@endsection
