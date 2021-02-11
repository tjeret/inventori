@extends('admin.app')

@section('title')
    Transaksi Bahan Baku
@endsection

@section('content')
    <form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('production.store') }}">
        @csrf
        <div class="col-lg-12 form-group mb-3">
            <label for="title">Resep</label>
            <select name="id_recipt" id="title" class="form-control">
                @foreach ($data as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-8 form-group mb-3">
            <label for="id_material">Bahan</label>
            <select name="id_material[]" id="id_material" class="form-control">
                @foreach ($bahan as $items)
                    <option value="{{ $items->id }}">{{ $items->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class=" col-lg-4 form-group mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="firstname" required>
        </div> --}}
        <div class="col-lg-8 form-group mb-3">
            <label for="id_material">Bahan 2</label>
            <select name="id_material[]" id="id_material" class="form-control">
                @foreach ($bahan as $items)
                    <option value="{{ $items->id }}">{{ $items->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class=" col-lg-4 form-group mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="firstname" required>
        </div> --}}
        <div class="col-lg-12">
            <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
                Lanjutkan
                <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
            </button>
        </div>
    </form>
@endsection

@section('addCss')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css" />
@endsection

@section('addJs')
    <script src="{{ asset('vendor') }}/dist/js/select.js"></script>
    {{-- @include('admin.pages.production.add') --}}
@endsection
