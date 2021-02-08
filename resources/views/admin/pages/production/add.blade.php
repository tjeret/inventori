<script>
    $('.add').click(function() {
        $('.block:last').after(
            `
    <div class="pg" id="pg-img">
        <div class="col-lg-12">
            <label for="exampleInputEmail1">Peserta</label>
            <div class="input-group">
                <select class="form-control form-type selectpicker1" name="user_id[]" data-live-search1="true" id="">
                    @foreach ($product as $item)
                        <option value="{{ $item->id }}">Nama : {{ $item->name }} |
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="col-lg-2 remove">
                <div class="btn-group ">
                    <button type="button" class="btn btn-sm btn-danger remove" onclick="deleteImg()"><i
                    class="fa fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
`
        );
    });
    $('.optionBox').on('click', '.remove', function() {
        $(this).parent().remove();
    });

</script>
