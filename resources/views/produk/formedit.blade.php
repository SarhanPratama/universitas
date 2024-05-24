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
                        <a href="{{url('prodi/')}}" class="btn btn-md btn-light mb-3 ">Kembali</a>
                         </div>
                    </div>
                    <form action="{{url('prodi/'.$prodi->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}

                        <label class="my-2 fs-5 fw-bolder" for="FAKULTAS">FAKULTAS</label><br>
                        <select class="form-select" id="idfak" name="idfak" required>
                            @foreach ($fakultas as $fakultas)
                                <option value="{{ $fakultas->id }}" {{ $prodi->idfak == $fakultas->id ? 'selected' : '' }}>{{ $fakultas->nama }}</option>
                            @endforeach
                        </select>

                        <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                            <input type="text" name="kode" class="form-control" value="{{$prodi->kode }}" placeholder="Masukkan Kode">
                        
                        <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                            <input type="text" name="nama" class="form-control" value="{{$prodi->nama }}" placeholder="Masukkan Nama"> 

                            <label class="my-2 fs-5 fw-bolder" for="">JENJANG</label><br>
                            <select class="form-select" id="jenjang" name="idjenjang" required>
                                
                                @foreach ($jenjang as $jenjang)
                                    <option value="{{ $jenjang->id }}" {{ $prodi->idjenjang == $jenjang->id ? 'selected' : '' }}>{{ $jenjang->nama }}</option>
                                @endforeach
                            </select> 

                            <label class="my-2 fs-5 fw-bolder" for="">TGLSK</label><br> 
                            <input type="date" name="tglsk" class="form-control" value="{{$prodi->tglsk }}" placeholder="Masukkan TglSk"> 

                            <label class="my-2 fs-5 fw-bolder" for="">AKREDITASI</label><br> 
                            <input type="" name="akreditasi" class="form-control" value="{{$prodi->akreditasi }}" placeholder="Masukkan akreditasi"> <br>
                        
                        <button class="btn btn-danger" type="submit">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection