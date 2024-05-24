@extends('welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center fw-bolder">{{ $judul }}</h1>
                <hr>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="">
                                <a href="{{ url('jadwal/') }}" class="btn btn-md btn-light mb-2">Kembali</a>
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-light text-danger alert-dismissible fade show text-center" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ url('/jadwal') }}" method="post" class="needs-validation" novalidate>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="mb-3">
                                <label class="form-label fs-5 fw-bolder">Tahun Akademik</label>
                                <select name="idta" class="form-select" required>
                                    <option value="" selected disabled>Pilih Tahun Akademik</option>
                                    @foreach ($jadwal as $t)
                                        <option value="{{ $t->tahunakademik->id }}">{{ $t->tahunakademik->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="idmatkul" class="form-label fs-5 fw-bolder">Matakuliah</label>
                                <select name="idmatkul" class="form-select" required>
                                    <option value="" selected disabled>Pilih Matkul</option>
                                    @foreach ($jadwal as $m)
                                        <option value="{{ $m->matkul->id }}">{{ $m->matkul->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="iddosen" class="form-label fs-5 fw-bolder">Dosen</label>
                                        <select name="iddosen" class="form-select" required>
                                            <option value="" selected disabled>Pilih Dosen</option>
                                            @foreach ($jadwal as $d)
                                                <option value="{{ $d->dosen->id }}">{{ $d->dosen->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="idkelas" class="form-label fs-5 fw-bolder">Kelas</label>
                                        <select name="idkelas" class="form-select" required>
                                            <option value="" selected disabled>Pilih Kelas</option>
                                            @foreach ($jadwal as $k)
                                                <option value="{{ $k->kelas->id }}">{{ $k->kelas->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="idruang" class="form-label fs-5 fw-bolder">Ruang</label>
                                        <select name="idruang" class="form-select" required>
                                            <option value="" selected disabled>Pilih Ruang</option>
                                            @foreach ($jadwal as $r)
                                                <option value="{{ $r->ruang->id }}">{{ $r->ruang->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="idhari" class="form-label fs-5 fw-bolder">Hari</label>
                                        <select name="idhari" class="form-select" required>
                                            <option value="" selected disabled>Pilih Hari</option>
                                            @foreach ($jadwal as $h)
                                                <option value="{{ $h->hari->id }}">{{ $h->hari->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="masuk" class="form-label fs-5 fw-bolder">Jam Masuk</label>
                                        <input type="time" name="masuk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="keluar" class="form-label fs-5 fw-bolder">Jam Keluar</label>
                                        <input type="time" name="keluar" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
