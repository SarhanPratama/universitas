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
                                <a href="{{url('prodi/')}}" class="btn btn-md btn-light mb-3 ">Kembali</a>
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

                            <form action="{{url('/prodi')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            
                                <label class="my-2 fs-5 fw-bolder" for="idfak">NAMA FAKULTAS</label><br>
                                    <select name="idfak" class="form-select" required>
                                        <option value="" selected disabled>Pilih Fakultas</option>
                                        @foreach($fakultas as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>

                                <label class="my-2 fs-5 fw-bolder" for="">KODE PRODI</label><br>
                                    <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Prodi">
                                
                            
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA PRODI</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Prodi">

                                    <label class="my-2 fs-5 fw-bolder" for="idjenjang">JENJANG</label><br>
                                    <select name="idjenjang" class="form-select" required>
                                        <option value="" selected disabled>Pilih Jenjang</option>
                                        @foreach($jenjang as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>


                                    {{-- <label class="my-2 fs-5 fw-bolder" for="">JENJANG</label><br> 
                                    <input type="text" name="jenjang" class="form-control" placeholder="Masukkan Nama Jenjang"> --}}

                                    <label class="my-2 fs-5 fw-bolder" for="">TglSk</label><br> 
                                    <input type="date" name="tglsk" class="form-control" placeholder="Masukkan TglSk">

                                    <label class="my-2 fs-5 fw-bolder" for="">AKREDITASI</label><br> 
                                    <input type="text" name="akreditasi" class="form-control" placeholder="Masukkan Akreditasi"> <br>

                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection