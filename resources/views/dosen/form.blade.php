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
                                <a href="{{url('dosen/')}}" class="btn btn-md btn-light mb-2 ">Kembali</a>
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
                            <form action="{{url('/dosen')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">                          
                                
                                <label class="my-2 fs-5 fw-bolder" for="">Nidn</label><br>
                                    <input type="text" name="nidn" class="form-control" placeholder="Masukkan Nidn">

                                <label class="my-2 fs-5 fw-bolder" for="">Nama</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"> 

                                    <label class="my-2 fs-5 fw-bolder">Jenis Kelamin</label><br>
                                    <input type="radio" name="jk" value="Laki-laki">
                                <label for="laki-laki">Laki-laki</label><br>
                                    <input type="radio" name="jk" value="Perempuan">
                                    <label for="perempuan">Perempuan</label><br>

                                <label class="my-2 fs-5 fw-bolder" for="">Alamat</label><br> 
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"> 

                                <label class="my-2 fs-5 fw-bolder" for="">Telp</label><br> 
                                    <input type="text" name="telp" class="form-control" placeholder="Masukkan Telp"> <br>


                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection