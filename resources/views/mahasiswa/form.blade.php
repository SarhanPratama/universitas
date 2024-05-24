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
                                <a href="{{url('mahasiswa/')}}" class="btn btn-md btn-light mb-3 ">Kembali</a>
                                 </div>
                            </div>
                            <form action="{{url('/mahasiswa')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">                          
                                
                                <label class="my-2 fs-5 fw-bolder" for="">Nim</label><br>
                                    <input type="text" name="nim" class="form-control" placeholder="Masukkan Nim">
                                                           
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">

                                <label class="my-2 fs-5 fw-bolder">Jenis Kelamin</label><br>
                                    <input type="radio" id="laki-laki" name="jk" value="Laki-laki">
                                <label for="laki-laki">Laki-laki</label><br>
                                    <input type="radio" id="perempuan" name="jk" value="Perempuan">
                                    <label for="perempuan">Perempuan</label><br>

                                <label class="my-2 fs-5 fw-bolder" for="">Alamat</label><br> 
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"> 

                                <label class="my-2 fs-5 fw-bolder" for="">Telp</label><br> 
                                    <input type="text" name="telp" class="form-control" placeholder="Masukkan Telp"> <br>

                                    <label class="my-2 fs-5 fw-bolder" for="">Dosen Pa</label><br> 
                                    <select name="dosen_pa" class="form-select" required>
                                        <option value="" selected disabled>Pilih Dosen</option>
                                        @foreach($dosen as $d)
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endforeach
                                    </select><br>


                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection