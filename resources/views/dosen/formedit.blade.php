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
                            <a href="{{url('dosen/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                        </div>
                    </div>
                    <form action="{{url('dosen/'.$dosen->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}

                        <label class="my-2 fs-5 fw-bolder" for="">Nidn</label><br>
                        <input type="text" name="nidn" class="form-control" value="{{$dosen->nidn }}"
                            placeholder="Masukkan Nidn">

                        <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br>
                        <input type="" name="nama" class="form-control" value="{{$dosen->nama }}"
                            placeholder="Masukkan Nama"> <br>

                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jk" value="Laki-laki" {{ $dosen->jk == 'Laki-laki' ? 'checked' : ''
                        }}>
                        <label for="laki-laki">Laki-laki</label><br>

                        <input type="radio" name="jk" value="Perempuan" {{ $dosen->jk == 'Perempuan' ? 'checked' : ''
                        }}>
                        <label for="perempuan">Perempuan</label><br>

                        <label class="my-2 fs-5 fw-bolder" for="">Alamat</label><br>
                        <input type="" name="alamat" class="form-control" value="{{$dosen->alamat }}"
                            placeholder="Masukkan Alamat"> <br>

                        <label class="my-2 fs-5 fw-bolder" for="">Telp</label><br>
                        <input type="" name="telp" class="form-control" value="{{$dosen->telp }}"
                            placeholder="Masukkan Telp"> <br>


                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection