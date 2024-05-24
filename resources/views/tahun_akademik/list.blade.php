@extends('welcome') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h1 class="text-center fw-bolder">{{ $judul }}</h1>
                <br />
                <hr />
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <a href="{{ url('tahun_akademik/create') }}" class="btn btn-md btn-light mb-3">TAMBAH
                                DATA</a>
                        </div>
                        <form class="d-flex align-items-center w-25" action="{{ route('tahun_akademik.index') }}"
                            method="GET">
                            <input type="text" class="form-control me-1 rounded" placeholder="Search..." name="search"
                                value="{{ request('search') }}" />
                            <i class="bx bx-search-alt fs-2"></i>
                        </form>
                        <div class="">
                            <a href="{{ '/' }}" class="btn btn-md btn-light mb-3">KEMBALI KE MENU</a>
                        </div>
                    </div>

                    {{-- @if(session('success'))
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        <strong>Congratulations!</strong>
                        {{ session("success") }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif --}} @if(Session::has('message'))
                    <script>
                        swal(
                            "Message",
                            "{{ Session::get('message') }}",
                            "success",
                            {
                                button: true,
                                button: "OK",
                                backgraund: "dark",
                            }
                        );
                    </script>
                    @endif

                    <table class="table table-dark text-center table-striped">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tbody>
                            @foreach($tahunakademik as $ta)
                            <tr>
                                <td>
                                    {{ ($page - 1) * $tahunakademik->perPage() + $loop->iteration }}
                                </td>
                                <td>{{ $ta->kode }}</td>
                                <td>{{ $ta->nama }}</td>
                                <td>
                                    <a href="{{ url('tahun_akademik/'.$ta->id) }}" class="btn btn-primary"><i
                                            class="bx bx-edit"></i></a>
                                    <form action="{{ url('tahun_akademik/'.$ta->id) }}" method="post"
                                        style="display: inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" id="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        {{ $tahunakademik->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>