@extends('welcome')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center fw-bolder">{{ $judul }}</h1>
            <hr>
            <div class="card border-0 shadow-sm rounded ">

                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div class="">
                        <a href="{{url('jadwal/')}}" class="btn btn-md btn-light mb-1 ">Kembali</a>
                        </div>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-light alert-dismissible fade show text-center" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }} 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            @endforeach                         
                    </div>
                @endif
                    <form action="{{url('jadwal/'.$jadwal->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="mb-1">
                            <label class="my-2 fs-5 fw-bolder">Tahun Akademik</label><br>
                        <select class="form-select" name="idta" required>
                            @foreach ($tahunakademik as $ta)
                                <option value="{{ $ta->id }}" {{ $jadwal->idta == $ta->id ? 'selected' : '' }}>{{ $ta->nama }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label class="my-2 fs-5 fw-bolder">Matakuliah</label><br>
                            <select class="form-select" name="idmatkul" required>
                                @foreach ($matkul as $m)
                                    <option value="{{ $m->id }}" {{ $jadwal->idmatkul == $m->id ? 'selected' : '' }}>{{ $m->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                        <label class="my-2 fs-5 fw-bolder">Dosen</label><br>
                        <select class="form-select" name="iddosen" required>
                            @foreach ($dosen as $d)
                                <option value="{{ $d->id }}" {{ $jadwal->iddosen == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                            @endforeach
                            </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="my-2 fs-5 fw-bolder">Kelas</label><br>
                                    <select class="form-select" name="idkelas" required>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->id }}" {{ $jadwal->idkelas == $k->id ? 'selected' : '' }}>{{ $k->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="my-2 fs-5 fw-bolder">Ruang</label><br>
                                    <select class="form-select" name="idruang" required>
                                        @foreach ($ruang as $r)
                                            <option value="{{ $r->id }}" {{ $jadwal->idruang == $r->id ? 'selected' : '' }}>{{ $r->nama }}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="my-2 fs-5 fw-bolder">Hari</label><br>
                                    <select class="form-select" name="idhari" required>
                                        @foreach ($hari as $h)
                                            <option value="{{ $h->id }}" {{ $jadwal->idhari == $h->id ? 'selected' : '' }}>{{ $h->nama }}</option>
                                        @endforeach
                                    </select>
            

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                            <label class="my-2 fs-5 fw-bolder" for="">Masuk</label><br> 
                            <input type="time" name="masuk" class="form-control" value="{{$jadwal->masuk }}" placeholder="Masukkan masuk"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                            <label class="my-2 fs-5 fw-bolder" for="">Keluar</label><br> 
                            <input type="time" name="keluar" class="form-control" value="{{$jadwal->keluar }}" placeholder="Masukkan keluar"> <br>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger" type="submit">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection