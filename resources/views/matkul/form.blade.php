@extends('welcome')

@section('content')
    

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center fw-bolder">{{ $judul }}</h1> <br>
                    <hr>
                    <div class="card border-0 shadow-sm rounded ">
                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <div class="">
                                <a href="{{url('matkul/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
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

                            <form action="{{url('/matkul')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                            
                              <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                                    <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode">
                                                         
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">

                                <label class="my-2 fs-5 fw-bolder" for="">SKS</label><br> 
                                    <input type="text" name="sks" class="form-control" placeholder="Masukkan Sks"> <br>

                                    <button class="btn btn-danger" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection