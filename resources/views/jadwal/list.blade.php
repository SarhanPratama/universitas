@extends('welcome')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div>
                <h1 class="text-center fw-bolder">{{$judul}}</h1> <br>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <a href="{{url('jadwal/create')}}" class="btn btn-md btn-light mb-3">TAMBAH DATA</a>
                        </div>
                        <form class="d-flex align-items-center w-25" action="{{ route('jadwal.index') }}" method="GET">
                            <input type="text" class="form-control me-1 rounded" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <i class='bx bx-search-alt fs-2'></i>
                        </form>
                        <div class="">
                            <a href="{{('/')}}" class="btn btn-md btn-light mb-2">KEMBALI KE MENU</a>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-light alert-dismissible fade show text-center" role="alert">
                        <strong>Congratulations! {{ session('success') }}</strong>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <table class="table table-responsive table-sm table-md table-dark text-center table-striped ">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">TA</th>
                                <th scope="col">Matakuliah </th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Ruang </th>
                                <th scope="col">Hari</th>
                                {{-- <th scope="col">Masuk</th>
                                <th scope="col">Keluar</th> --}}
                                <th scope="col">Waktu</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach($jadwal as $j)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $j->tahunakademik->nama }}</td>
                                <td class="align-middle">{{ $j->matkul->nama }}</td>
                                <td class="align-middle">{{ $j->dosen->nama }}</td>
                                <td class="align-middle">{{ $j->kelas->nama }}</td>
                                <td class="align-middle">{{ $j->ruang->nama }}</td>
                                <td class="align-middle">{{ $j->hari->nama }}</td>
                                <td class="align-middle">{{ $j->masuk }} --> {{ $j->keluar }}</td>
                                {{-- <td>{{ $j->keluar }}</td> --}}
                                <td>
                                    <a href="{{ url('jadwal/'.$j->id) }}" class="btn btn-primary"><i
                                            class='bx bx-edit'></i></a>

                                    <form action="{{ url('jadwal/'.$j->id) }}" method="post" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                class='bx bx-trash'></i></button>
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