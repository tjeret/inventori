@extends('admin.app')

@section('title')
    Production
@endsection

@section('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Production</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Production</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('content')
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tabel Produk</h3>

                <div class="card-tools">
                <ul class="pagination float-right">
                    <li>
                        <div class="input-group input-group-sm col" style="width:150px">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#form">
                                    Tambah Data
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class="input-group input-group-sm col" style="width:150px">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: auto;">
                <table class="table table-head-fixed text-nowrap table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Produk</th>
                        <th>Variant</th>
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
                    </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>

    @include('admin.pages.production.modal.add-production')
@endsection
