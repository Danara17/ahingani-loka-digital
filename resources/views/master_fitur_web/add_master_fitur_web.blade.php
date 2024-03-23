{{-- Extends Template Layout --}}
@extends('templates.layout')

{{-- Judul Halaman  --}}
@section('title', 'Tambah Master Fitur Web')

{{-- Actived Sidebar --}}
@section('master-fitur-web-actived-bar')
<span class="actived-bar"></span>
@endsection
@section('master-fitur-web-actived', 'active')
{{--  --}}

{{-- Main Content --}}
@section('content')

  {{-- Halaman Show --}}
  @section('halaman', 'Tambah Master Fitur Web')

  <div class="container">
    <div class="card shadow-sm mt-3 mb-3">
      <div class="card-body">

        <div class="d-flex justify-content-between">
          <a href="{{route('master-fitur')}}" class="button button-outline-primary text-decoration-none">back</a>
        </div>

        <hr class="hr">

        <form action="{{route('add__master-fitur')}}" method="POST">
          @csrf
          <div class="form-input-dashboard">
            <label for="nama_fitur">Nama Fitur <span style="color: red">*</span></label>
            <input
              type="text"
              id="nama_fitur"
              name="nama_fitur"
              required
              placeholder="Nama Fitur" />
          </div>
  
          <div class="form-input-dashboard">
            <label for="harga_fitur" >Harga Fitur <span style="color: red">*</span></label>
            <input
              required  
              type="text"
              id="harga_fitur"
              placeholder="Contoh: Rp. 1,000,000.00"
              value=""
              name="harga_fitur"
              onBlur="formatCurrency(this, 'Rp ', 'blur');"
              onkeyup="formatCurrency(this, 'Rp ');"
            />
          </div>
        
          <div class="form-input-dashboard">
            <label for="deskripsi_fitur">Deskripsi Fitur <span style="color: red">*</span></label>
            <textarea required name="deskripsi_fitur" id="deskripsi_fitur" cols="30" rows="10"></textarea>
          </div>

          <div class="form-input-dashboard">
            <label for="alias">Alias <span style="color: red">*</span></label>
             <input
              type="text"
              id="alias"
              name="alias"
              required
              placeholder="Alias" />
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" class="button button-primary">Simpan</button>
          </div>
        </form>
        
        
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
  function formatNumber(n) {
      // format number 1000000 to 1,234,567
      return n
          .replace(/\D/g, "")
          .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  function formatCurrency(input, currency, blur) {
      // appends $ to value, validates decimal side
      // and puts cursor back in right position.
      // get input value
      var input_val = input.value;
      // don't validate empty input
      if (input_val === "") {
          return;
      }

      // original length
      var original_len = input_val.length;

      // initial caret position
      var caret_pos = input.selectionStart;

      // check for decimal
      if (input_val.indexOf(".") >= 0) {
          // get position of first decimal
          // this prevents multiple decimals from
          // being entered
          var decimal_pos = input_val.indexOf(".");

          // split number by decimal point
          var left_side = input_val.substring(0, decimal_pos);
          var right_side = input_val.substring(decimal_pos);

          // add commas to left side of number
          left_side = formatNumber(left_side);

          // validate right side
          right_side = formatNumber(right_side);

          // On blur make sure 2 numbers after decimal
          if (blur === "blur") {
              right_side += "00";
          }

          // Limit decimal to only 2 digits
          right_side = right_side.substring(0, 2);

          // join number by .
          input_val = currency + left_side + "." + right_side;
      } else {
          // no decimal entered
          // add commas to number
          // remove all non-digits
          input_val = formatNumber(input_val);
          input_val = currency + input_val;

          // final formatting
          if (blur === "blur") {
              input_val += ".00";
          }
      }

      // send updated string to input
      input.value = input_val;

      // put caret back in the right position
      var updated_len = input_val.length;
      caret_pos = updated_len - original_len + caret_pos;
      input.setSelectionRange(caret_pos, caret_pos);
  }
</script>
@endsection