@extends('welcome')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center fw-bolder">{{ $judul }}</h1> <br>
                    <hr>
                    <div class="card border-0 shadow-sm rounded ">
                        <div class="card-body">
                            <div class="d-flex justify-content-start">
                                <div class="">
                                <a href="{{url('jenjang/')}}" class="btn btn-md btn-light mb-2 ">KEMBALI</a>
                                 </div>
                            </div>
                            <form action="{{url('/jenjang')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                      
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"> <br>
                                <button class="btn btn-danger" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        @endsection