@extends('welcome')

@section('content')
    
        <div class="container ">
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
                                    <a href="{{url('fakultas/create')}}" class="btn btn-md btn-light mb-3">TAMBAH DATA</a>                     
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
                                    <th scope="col">Nama Fakultas</th>
                                    <th scope="col">Nama Dekan</th>
                                    <th colspan="2">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tbody>
                                        @foreach($fakultas as $f)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $f->kode }}</td>
                                                <td>{{ $f->nama }}</td>
                                                <td>{{ $f->dosen->nama}}</td>  
                                                <td>
                                                    <a href="{{ url('fakultas/'.$f->id) }}" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                                                    <form action="{{ url('fakultas/'.$f->id) }}" method="post" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class='bx bx-trash'></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection