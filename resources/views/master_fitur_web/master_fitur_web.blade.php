{{-- Extends Template Layout --}}
@extends('templates.layout')

{{-- Judul Halaman  --}}
@section('title', 'Master Fitur Web')

{{-- Actived Sidebar --}}
@section('master-fitur-web-actived-bar')
<span class="actived-bar"></span>
@endsection
@section('master-fitur-web-actived', 'active')
{{--  --}}

{{-- Main Content --}}
@section('content')

  {{-- Halaman Show --}}
  @section('halaman', 'Master Fitur Web')

  <div class="container ">   
    <div class="card shadow-sm p-4">
      <div class="d-flex my-3 justify-content-between align-items-center">
        <span style="width: 250px">
          <input type="text" id="myInput" onkeyup="searchUpTable()" placeholder="Cari fitur ...">
        </span>
        <a href="{{route('add-master-fitur')}}" class="button button-primary" style="font-size: 15px">+ Tambah Fitur</a>
      </div>
      <div class="card-body p-0">
        
        @if(Session::get('success'))
        <div class="my-2">
          <div class="alert alert-success rounded-0">
            {{Session::get('success')}}
          </div>
        </div>
        @endif
        @if(Session::get('error'))
        <div class="my-2">
          <div class="alert alert-danger rounded-0">
            {{Session::get('error')}}
          </div>
        </div>
        @endif

        <table id="myTable" class="table table-hover border text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Fitur</th>
              <th scope="col">Alias</th>
              <th scope="col">Harga</th>
              <th scope="col">
                ops                
              </th>
            </tr>
          </thead>
          <tbody class="">
            @foreach ($data as $item)
            <tr >
              <th scope="row" style="vertical-align: middle">{{$loop->iteration}}</th>
              <td style="vertical-align: middle">{{$item->nama_fitur}}</td>
              <td style="vertical-align: middle">{{$item->alias}}</td>
              <td style="vertical-align: middle">Rp {{number_format($item->harga)}}.00</td>
              <td class="grid gap-3">
                <a class="button button-primary h-100" href="/master-fitur/edit/{{$item->id_fitur}}">Edit</a>
                <button class="button button-primary">Hapus</button>
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
  function searchUpTable() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script>
@endsection