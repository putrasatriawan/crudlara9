@extends('orang.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Tambah Orang</h2>
        </div>
        <div>
            <a class="btn btn-primary"
               href="{{ route('orang.index') }}"> Back</a>
        </div>
    </div>
</div>



<form action="{{ route('orang.store') }}"
      method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                <input type="text"
                       name="nama"
                       class="form-control"
                       placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tgl Lahir</strong>
                <input type="date"
                       name="tgl_lahir"
                       class="form-control"
                       placeholder="Tgl Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <STrong>Jenis Kelamin</STrong>
                <label class="radio-inline">
                    <input type="radio"
                           value="0"
                           name="jk"
                           id="smt-fld-1-2"
                           name="optradio1">L</label>
                <label class="radio-inline">
                    <input type="radio"
                           value="1"
                           name="jk"
                           id="smt-fld-1-3"
                           name="optradio1">P</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat</strong>
                <textarea type="text"
                          name="alamat"
                          class="form-control"
                          placeholder="Alamat"> </textarea>
            </div>
        </div>
        <div class="form-group">
            <label><strong>Hobi</strong></label><br>
            <label><input type="checkbox"
                       name="hobi[]"
                       value="Red">Red</label>
            <label><input type="checkbox"
                       name="hobi[]"
                       value="Blue">Blue</label>
            <label><input type="checkbox"
                       name="hobi[]"
                       value="Green">Green</label>
            <label><input type="checkbox"
                       name="hobi[]"
                       value="Yellow">Yellow</label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit"
                    class="btn btn-success">Submit</button>
        </div>
    </div>

</form>
@endsection
@push('scrips')
<script type="text/javascript"
        src="{{ asset('back/select/js/bootstrap-select.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endpush