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
                                <a href="{{url('kelas/')}}" class="btn btn-md btn-light mb-3 ">Kembali</a>
                                 </div>
                            </div>
                            <form action="{{url('/kelas')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            
                                
                                <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                                    <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode">
                                
                            
                            
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"> <br>

                                    <label for="idta">Tahun Akademik</label>
                                    <select name="idta" class="form-control" required>
                                        <option value="" selected disabled>Pilih Tahun Akademik</option>
                                        @foreach($tahunakademik as $ta)
                                            <option value="{{ $ta->id }}">{{ $ta->nama }}</option>
                                        @endforeach
                                    </select> <br>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection