<h6>Recipe</h6>
<form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('recipe') }}">
    @csrf
    <div class=" col-lg-4 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Recipe</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-lg-12">
        <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
            Tambah
            <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
        </button>
    </div>
</form>

<h6>Ingredient</h6>
<form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('ingridient') }}">
    @csrf
    <div class="col-lg-12 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Recipe</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-lg-6 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Raw </label>
        <select type="text" class="form-control" name="ingredient.*.raw" required>
            @foreach ($bahan as $raw)
                <option value="{{ $raw->id }}">{{ $raw->name }}</option>
            @endforeach
        </select>
    </div>
    <div class=" col-lg-6 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Value</label>
        <input type="text" class="form-control" name="ingredient.*.value" required>
    </div>
    <div class="col-lg-6 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Raw </label>
        <select type="text" class="form-control" name="ingredient.*.raw" required>
            @foreach ($bahan as $raw)
                <option value="{{ $raw->id }}">{{ $raw->name }}</option>
            @endforeach
        </select>
    </div>
    <div class=" col-lg-6 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Value</label>
        <input type="text" class="form-control" name="ingredient.*.value" required>
    </div>
    <div class="col-lg-12">
        <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
            Tambah
            <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
        </button>
    </div>
</form>

<h6>Cooking</h6>
<form class="wow fadeInUp mt-4 row" data-wow-delay="0.3s" method="post" action="{{ route('cook') }}">
    @csrf
    <div class="col-lg-6 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Recipe </label>
        <input type="text" class="form-control" name="recipe" required>
    </div>
    <div class=" col-lg-6 form-group mb-3">
        <label for="exampleInputEmail1" class="form-label">Value</label>
        <input type="text" class="form-control" name="value" required>
    </div>
    <div class="col-lg-12">
        <button class="theme_btn" id="" type="submit" style="border-radius:5px;float:right">
            Tambah
            <i class=" fa fa-arrow-right" style="padding-left:20px"></i>
        </button>
    </div>
</form>
