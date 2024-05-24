@extends('welcome')

@section('content')
@php
$page = $ruang->currentPage();
@endphp
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div>
                        <h1 class="text-center fw-bolder">{{$judul}}</h1>  <br>        
                        <hr>
                    </div>
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <a href="{{url('ruang/create')}}" class="btn btn-md btn-light mb-3">TAMBAH DATA</a>                     
                                </div>
                                <div class="">
                                    <a href="{{('/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI KE MENU</a>
                                </div>
                            </div>
                            @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                <strong>Congratulations!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                        @endif
                            <table class="table table-dark text-center table-striped">
                                <thead class="table-light">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Ruangan</th>
                                    <th colspan="2">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tbody>
                                        @foreach($ruang as $r)
                                            <tr>
                                                <td>{{  ($page - 1) * $ruang->perPage() + $loop->iteration}}</td>
                                                <td>{{ $r->kode }}</td>
                                                <td>{{ $r->nama }}</td>
                                                <td>
                                                    <a href="{{ url('ruang/'.$r->id) }}" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                                                    <form action="{{ url('ruang/'.$r->id) }}" method="post" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class='bx bx-trash'></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                 </table><br>
                                 <div class="d-flex justify-content-end">
                                    {{ $ruang->links('pagination::bootstrap-4') }}
                                    
                                 </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            @endsection