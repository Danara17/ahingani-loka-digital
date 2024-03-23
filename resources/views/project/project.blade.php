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

  <div class="container ">   
    <div class="card shadow-sm p-4">
      <div class="d-flex my-3 justify-content-between align-items-center">
        <span style="width: 250px">
          <input type="text" id="myInput" onkeyup="searchUpTable()" placeholder="Cari Proyek ...">
        </span>
        <a href="{{route('create-project')}}" class="button button-primary" style="font-size: 15px; height: 100%">+ Tambah Fitur</a>
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
              <th scope="col">Nama Proyek</th>
              <th scope="col">Basis Proyek</th>
              <th scope="col">Related to</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">
                ops                
              </th>
            </tr>
          </thead>
          <tbody class="">
            <tr >
              <th scope="row" style="vertical-align: middle">1</th>
              <td style="vertical-align: middle">Aplikasi Web Karang Taruna RW 08</td>
              <td style="vertical-align: middle">
                Web Application
              </td>
              <td style="vertical-align: middle">Karang Tarua RW 08 Permata Safira</td>
              <td style="vertical-align: middle">
                <a href="#">See Desc</a>
              </td>
              <td class="grid gap-3">
                <button class="button button-primary">Edit</button>
                <button class="button button-primary">Hapus</button>
              </td>
            </tr>
        
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