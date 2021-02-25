<h6>Type Product</h6>

<form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('type') }}">
    @csrf
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-lg-12">
        <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
            Tambah
            <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
        </button>
    </div>
</form>

<h6>supplier</h6>

<form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('supplier') }}">
    @csrf
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Owner</label>
        <input type="text" class="form-control" name="owner" required>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" required>
    </div>
    <div class="col-lg-12">
        <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
            Tambah
            <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
        </button>
    </div>
</form>

<h6>Raw Transaction</h6>

<form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('rawtransaction') }}">
    @csrf
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Owner</label>
        <select type="text" class="form-control" name="supplier_id" required>
            @foreach ($supplier as $item)
                <option value="{{ $item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" required>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Invoice</label>
        <input type="text" class="form-control" name="invoice" required>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Type Product</label>
        <select type="text" class="form-control" name="raw_type_id" required>
            @foreach ($type as $items)
                <option value="{{ $items->id }}">{{ $items->name }}</option>
            @endforeach
        </select>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Name Product</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Jumlah Product</label>
        <input type="text" class="form-control" name="debit" required>
    </div>
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Expired</label>
        <input type="text" class="form-control" name="expired_at" required>
    </div>

    <div class="col-lg-12">
        <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
            Tambah
            <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
        </button>
    </div>
</form>
