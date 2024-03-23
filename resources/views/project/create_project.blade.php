{{-- Extends Template Layout --}}
@extends('templates.layout')

{{-- Judul Halaman  --}}
@section('title', 'Buat Proyek')

{{-- Actived Sidebar --}}
@section('create-project-actived-bar')
<span class="actived-bar"></span>
@endsection
@section('create-project-actived', 'active')
{{--  --}}

{{-- Main Content --}}
@section('content')

  {{-- Halaman Show --}}
  @section('halaman', 'Buat Proyek')

  <div class="container">
    <div class="card shadow-sm mt-3 mb-3">
      <div class="card-body">

        <div class="d-flex justify-content-between">
          <a href="{{route('project')}}" class="button button-outline-primary text-decoration-none">back</a>
        </div>

        <hr class="hr">

        <form action="{{route('create__project')}}" method="POST">
          @csrf
          
          <div class="form-input-password">
            <label id="divide-label">Informasi Kontak</label>
          </div>
          
          <div class="form-input-dashboard">
            <label for="nama_client" >Nama Client <span style="color: red">*</span>  </label>
            <input type="text" name="nama_client" id="nama_client" placeholder="Contoh: Budi Jono">
          </div>

          <div class="form-input-dashboard">
            <label for="email_client" >Email <span style="color: red">*</span>  </label>
            <input type="email" name="email_client" id="email_client" placeholder="Contoh: BudiJono89298@xxx.com">
          </div>

          <div class="form-input-dashboard">
            <label for="no_telp" >Nomor Telepon <span style="color: red">*</span>  </label>
            <input type="text" name="no_telp" id="no_telp" placeholder="Contoh: 081xxxxxxxxxx">
          </div>

          <div class="form-input-dashboard">
            <label for="alamat" >Alamat </label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Contoh: Surabaya, xxxx, xxxx, xxxx"></textarea>
          </div>


          <div class="form-input-password">
            <label id="divide-label">Detail Proyek</label>
          </div>

          <div class="form-input-dashboard">
            <label for="nama_bisnis" >Nama Bisnis <span style="color: red">*</span> <em style="color: #d7d7d7">(untuk ditampilkan di website)</em> </label>
            <input type="text" name="nama_bisnis" id="nama_bisnis" placeholder="Contoh: WeTool">
          </div>

          <div class="form-input-dashboard">
            <label for="deskripsi_proyek" >Deskripsi Singkat tentang Bisnis atau Proyek <span style="color: red">*</span></label>
            <input type="text" name="deskripsi_proyek" id="deskripsi_proyek" placeholder="Contoh: Proyek ini untuk...">
          </div>

          <div class="form-input-dashboard">
            <label for="jenis_proyek" >Jenis <span style="color: red">*</span></label>
            <select name="jenis_proyek" id="jenis_proyek">
              <option value="1">Blog Pribadi</option>
              <option value="2">Situs E-commerce</option>
              <option value="3">Situs Perusahaan</option>
              <option value="4">Portfolio</option>
            </select>
          </div>

          <div class="form-input-dashboard">
            <label for="ide_desain" >Jelaskan secara singkat tentang ide Desain Awal Aplikasi anda <em style="color: #d7d7d7">(apabila ada)</em></label>
            <textarea name="ide_desain" id="ide_desain" cols="30" rows="10" placeholder="Contoh: Saya ingin web saya memiliki tampilan seperti facebook dan ..."></textarea>
          </div>

          <div class="form-input-dashboard">
            <label for="kebutuhan_fungsional" >Apakah anda membutuhkan Fungsi Khusus? Isi jika ada </label>
            <textarea name="kebutuhan_fungsional" id="kebutuhan_fungsional" cols="30" rows="10" placeholder="Contoh: Pembayaran Online, Formulir Kontak, ..."></textarea>
          </div>

          <div class="form-input-dashboard">
            <label for="target_utama" >Target Utama <span style="color: red">*</span></label>
            <input type="text" name="target_utama" id="target_utama" placeholder="Contoh: Anak Muda, Orang Tua, Millenial, ...">
          </div>

          <div class="form-input-dashboard">
            <label for="tujuan_utama" >Tujuan Utama Aplikasi Anda<span style="color: red">*</span></label>
            <input type="text" name="tujuan_utama" id="tujuan_utama" placeholder="Contoh: Penjualan Produk, Meningkatkan Kesadaran Merk, ...">
          </div>

          <div class="form-input-dashboard">
            <label for="anggaran" >Anggaran yang tersedia untuk Proyek ini <span style="color: red">*</span>  <em style="color: #d7d7d7">(perkiraan)</em></label>
            <input
              type="text"
              id="anggaran"
              placeholder="Contoh: Rp. 1,000,000.00"
              value=""
              name="anggaran"
              onBlur="formatCurrency(this, 'Rp ', 'blur');"
              onkeyup="formatCurrency(this, 'Rp ');"
            />
          </div>

          <div class="form-input-dashboard">
            <label for="deadline" >Batas waktu yang tersedia</label>
            <input type="date" name="deadline" id="deadline">
          </div>

          <div class="form-input-dashboard">
            <label for="referensi" >Apakah ada Contoh Website yang Anda Suka atau Inspirasi untuk Proyek Anda ?</label>
            <input type="text" name="referensi" id="referensi" placeholder="Contoh: Saya ingin web saya seperti ...">
          </div>
          
          <div class="form-input-dashboard">
            <label for="catatan" >Apakah ada Hal lain yang ingin Anda Sampaikan Kepada Kami</label>
            <textarea name="catatan" id="catatan" placeholder="Contoh: Saya ingin web saya seperti ..." cols="30" rows="3"></textarea>
          </div>

          <div class="d-flex justify-content-end">
            <button class="button button-primary">Buat Project</button>
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