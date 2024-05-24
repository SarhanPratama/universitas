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
                        <a href="{{url('ruang/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                         </div>
                    </div>
                    <form action="{{url('ruang/'.$ruang->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}
                    
                        <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                            <input type="text" name="kode" class="form-control" value="{{$ruang->kode }}" placeholder="Masukkan Kode">
                        
                    
                    
                        <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                            <input type="" name="nama" class="form-control" value="{{$ruang->nama }}" placeholder="Masukkan Nama"> <br>
                        
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
