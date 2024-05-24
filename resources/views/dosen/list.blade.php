@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1 class="text-center fw-bolder">{{$judul}}</h1>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <a href="{{url('dosen/create')}}" class="btn btn-md btn-light mb-3">TAMBAH DATA</a>
                        </div>

                        <form class="d-flex align-items-center w-25" action="{{ route('dosen.index') }}" method="GET">

                            <input type="text" class="form-control me-1 rounded" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <i class='bx bx-search-alt fs-2'></i>
                        </form>

                        <div class="">
                            <a href="{{('/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI KE MENU</a>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-light alert-dismissible fade show text-center" role="alert">
                        <strong>Congratulations!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table table-responsive table-dark text-center table-striped">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nidn</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. Hp</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($dosen as $d)
                            <tr>
                                <td class="align-middle">{{ ($page - 1) * $dosen->perPage() + $loop->iteration }}</td>
                                <td class="align-middle">{{ $d->nidn }}</td>
                                <td class="align-middle">{{ $d->nama }}</td>
                                <td class="align-middle">{{ $d->jk }}</td>
                                <td class="align-middle">{{ $d->alamat }}</td>
                                <td class="align-middle">{{ $d->telp }}</td>
                                <td>
                                    <a href="{{ url('dosen/'.$d->id) }}" class="btn btn-primary"><i
                                            class='bx bx-edit'></i></a>
                                    <form action="{{ url('dosen/'.$d->id) }}" method="post" style="display:inline">
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
                    </table><br>
                    <div class="d-flex justify-content-end">
                        {{ $dosen->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection