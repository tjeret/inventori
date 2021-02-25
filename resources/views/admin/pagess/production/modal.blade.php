 {{-- Modal Add Product --}}
 <div class="modal fade" id="modal-default">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Produk</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('production.store') }}" method="POST">
                     @csrf
                     <div class="card-body">

                         <div class="form-group">
                             <label for="Name">Nama Resep</label>
                             <input type="name" class="form-control
                            @error('name') is-invalid @enderror" name="name" id="name"
                                 placeholder="Masukan Nama Produk" value="{{ old('name') }}">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Produk</label>
                             <select name="id_type" type="password" class="form-control" id="exampleInputPassword1"
                                 placeholder="Password">
                                 @foreach ($type as $item)
                                     <option value="{{ $item->id }}">{{ $item->name }}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class=" form-group">
                             <label for="unit">Harga Beli</label>
                             <input type="number" class="form-control
                            @error('price_buy') is-invalid @enderror" name="price_buy" id="price_buy"
                                 placeholder="Masukan Jumlah Produk" value="{{ old('price_buy') }}">
                         </div>
                         <div class=" form-group">
                             <label for="unit">Harga Jual</label>
                             <input type="number" class="form-control
                             @error('price_sell') is-invalid @enderror" name="price_sell" id="price_sell"
                                 placeholder="Masukan Jumlah Produk" value="{{ old('price_sell') }}">
                         </div>
                         {{-- Stock --}}
                         <div class=" form-group">
                             <label for="unit">Jumlah</label>
                             <input type="number" class="form-control
                                @error('debit') is-invalid @enderror" name="debit" id="debit"
                                 placeholder="Masukan Jumlah Produk" value="{{ old('debit') }}">
                         </div>
                     </div>
                     <!-- /.card-body -->

                     <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Tambah</button>
                         <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                     </div>
                 </form>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 {{-- End Modal Add Product --}}

 {{-- resep --}}
 {{-- Modal Add Product --}}
 <div class="modal fade" id="resep">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Produk</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('production.recipe') }}" method="POST">
                     @csrf
                     <div class="card-body">
                         <div class="form-group mb-2">
                             <label for="Name">Nama Produk</label>
                             <input type="name" class="form-control
                            @error('name') is-invalid @enderror" name="name" id="name"
                                 placeholder="Masukan Nama Produk" value="{{ old('name') }}">
                         </div>
                         <div class="card-footer">
                             <button type="submit" class="btn btn-primary">Tambah</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 {{-- end resep --}}

 <div class="modal fade" id="resep-details">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Resep Details</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('production.recipe') }}" method="POST">
                     @csrf
                     <div class="card-body">
                         <div class="form-group mb-2">
                             <label for="Name">Nama Produk</label>
                             <input type="name" class="form-control
                            @error('name') is-invalid @enderror" name="name" id="name"
                                 placeholder="Masukan Nama Produk" value="{{ old('name') }}">
                         </div>
                         <div class="form-group mb-2">
                             <label for="resep">Resep</label>
                             <select id="selectpicker" class="selectpicker form-control" data-live-search="true">
                                 <option value="pharetra.felis.eget@convallisest.ca"
                                     data-subtext="pharetra.felis.eget@convallisest.ca">Hammett</option>
                                 <option value="tellus.Suspendisse.sed@duiCumsociis.edu"
                                     data-subtext="tellus.Suspendisse.sed@duiCumsociis.edu">Quyn</option>
                                 <option value="mauris.eu@Naminterdum.co.uk" data-subtext="mauris.eu@Naminterdum.co.uk">
                                     Maisie</option>
                             </select>
                         </div>
                         <div class="form-group mb-2">
                             <label for="resep">Resep</label>
                             <select id="selectpicker" class="selectpicker form-control" data-live-search="true">
                                 <option value="tellus.Suspendisse.sed@duiCumsociis.edu"
                                     data-subtext="tellus.Suspendisse.sed@duiCumsociis.edu">Quyn</option>
                                 <option value="mauris.eu@Naminterdum.co.uk" data-subtext="mauris.eu@Naminterdum.co.uk">
                                     Maisie</option>
                             </select>
                         </div>
                         <div class="optionBox">
                             <div class="pg" id="pg-img">
                                 <div class="form-group">
                                     <strong for="exampleInputEmail1">Tambah Peserta</strong>
                                 </div>
                                 <div class="col-lg-2 mt-2 mb-2">
                                     <button type="button" class="btn btn-primary btn-sm add" id="add-image">
                                         <i class="fa fa-plus"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>
                         <div class="card-footer">
                             <button type="submit" class="btn btn-primary">Tambah</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>
 {{-- end resep --}}
