<div class="modal fade" id="form" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Isi Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        <form action="">
            <div class="modal-body">
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Input Produk</h3>
              </div>
              <div class="card-body">
                <input class="form-control" type="text" placeholder="Nama Produk">
                <br>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3">Alabama</option>
                    <option data-select2-id="40">Alaska</option>
                    <option data-select2-id="41">California</option>
                    <option data-select2-id="42">Delaware</option>
                    <option data-select2-id="43">Tennessee</option>
                    <option data-select2-id="44">Texas</option>
                    <option data-select2-id="45">Washington</option>
                  </select>
                  {{-- <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gz99-container"><span class="select2-selection__rendered" id="select2-gz99-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                <br>
                <input class="form-control" type="text" placeholder="Harga">
                <br>
                <input class="form-control" type="text" placeholder="Jumlah">
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah Produk</button>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
