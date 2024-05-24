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
                            <a href="{{url('kelas/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                        </div>
                    </div>
                    <form action="{{url('kelas/'.$kelas->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}
                    
                        <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                        <input type="text" name="kode" class="form-control" value="{{$kelas->kode }}" placeholder="Masukkan Kode">
                        
                    
                    
                        <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                            <input type="" name="nama" class="form-control" value="{{$kelas->nama }}" placeholder="Masukkan Nama"> <br>

                            <label for="idta" class="form-label">Tahun Akademik</label>
                            <select class="form-select" id="idta" name="idta" required>
                                @foreach ($tahunakademik as $ta)
                                    <option value="{{ $ta->id }}" {{ $kelas->idta == $ta->id ? 'selected' : '' }}>{{ $ta->nama }}</option>
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
