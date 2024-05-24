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
                        <a href="{{url('mahasiswa/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                         </div>
                    </div>
                    <form action="{{url('mahasiswa/'.$mahasiswa->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}
                    
                        <label class="my-2 fs-5 fw-bolder" for="">Nim</label><br>
                            <input type="text" name="nim" class="form-control" value="{{$mahasiswa->nim }}" placeholder="Masukkan Nim">                   
                    
                        <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                            <input type="" name="nama" class="form-control" value="{{$mahasiswa->nama }}" placeholder="Masukkan Nama"> <br>

                            <label>Jenis Kelamin</label><br>
                            <input type="radio" name="jk" value="Laki-laki" {{ $mahasiswa->jk == 'Laki-laki' ? 'checked' : '' }}>
                            <label for="laki-laki">Laki-laki</label><br>
                            <input type="radio" name="jk" value="Perempuan" {{ $mahasiswa->jk == 'Perempuan' ? 'checked' : '' }}>
                            <label for="perempuan">Perempuan</label><br>

                        <label class="my-2 fs-5 fw-bolder" for="">Alamat</label><br> 
                            <input type="" name="alamat" class="form-control" value="{{$mahasiswa->alamat }}" placeholder="Masukkan Alamat"> <br>

                        <label class="my-2 fs-5 fw-bolder" for="">Telp</label><br> 
                            <input type="" name="telp" class="form-control" value="{{$mahasiswa->telp }}" placeholder="Masukkan Telp"> <br>

                            <label class="my-2 fs-5 fw-bolder" for="">Nama Dekan</label><br> 
                            <select class="form-select" name="dosen_pa" required>
                                @foreach ($dosen as $d)
                                    <option value="{{ $d->id }}" {{ $mahasiswa->dosen_pa == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                                @endforeach
                            </select> <br>

                        
                        <button class="btn btn-danger" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
