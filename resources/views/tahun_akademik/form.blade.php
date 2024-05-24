@extends('welcome')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center fw-bolder">{{ $judul }}</h1>
            <hr>
            <div class="card border-0 shadow-sm rounded ">
                        <div class="card-body">
                            <div class="d-flex justify-content-start">
                                <div class="">
                                <a href="{{url('tahun_akademik/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                                </div>
                            </div>
                        
                            <form action="{{url('/tahun_akademik')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        
                                <label class="my-2 fs-5 fw-bolder" for="validationServer01">KODE</label><br>
                                <input type="text" id="validationServer01" name="kode" class="form-control @error('kode') is-invalid @enderror" placeholder="Masukkan Kode">    
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror                 
                            
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror 
                                    <br>
                                <button class="btn btn-danger" type="submit">Submit</button>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection

