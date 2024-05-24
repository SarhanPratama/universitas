@extends('welcome')

@section('content')
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
                                    <a href="{{url('jenjang/create')}}" class="btn btn-md btn-light mb-3">TAMBAH DATA</a>                     
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

                        <form action="{{ route('jenjang.index') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Tahun Akademik..." name="search" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                            <table class="table table-dark table-hover text-center table-striped">
                                <thead class="table-light">
                                 
                                    <th scope="col">No</th>
                                    <th scope="col">Jenjang</th>
                                    <th scope="col" colspan="2">Aksi</th>
                        
                                </thead>
                                <tbody>
                                    <tbody>
                                        @foreach($jenjang as $j)
                                            <tr>
                                                <td> {{ ($page - 1) * $jenjang->perPage() + $loop->iteration }}</td>
                                                <td>{{ $j->nama }}</td>
                                                <td>
                                                    <a href="{{ url('jenjang/'.$j->id) }}" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                                                    <form action="{{ url('jenjang/'.$j->id) }}" method="post" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tahun akademik ini?')"><i class='bx bx-trash'></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                       
                                    </tbody>
                                 </table><br>

                                 <div class="d-flex justify-content-end">
                                   {{ $jenjang->links('pagination::bootstrap-5') }}
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection