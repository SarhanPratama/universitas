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
                        <a href="{{url('matkul/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                         </div>
                    </div>
                    <form action="{{url('matkul/'.$matkul->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}
                    
                        <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                            <input type="text" name="kode" class="form-control" value="{{$matkul->kode }}" placeholder="Masukkan Kode">
                    
                        <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                            <input type="" name="nama" class="form-control" value="{{$matkul->nama }}" placeholder="Masukkan Nama"> 

                        <label class="my-2 fs-5 fw-bolder" for="">SKS</label><br> 
                            <input type="" name="sks" class="form-control" value="{{$matkul->sks }}" placeholder="Masukkan Sks"> <br>

                        <button class="btn btn-danger" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
