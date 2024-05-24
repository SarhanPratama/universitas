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
                                <a href="{{url('fakultas/')}}" class="btn btn-md btn-light mb-3 ">Kembali</a>
                                 </div>
                            </div>
                            <form action="{{url('/fakultas')}}" method="post" class="">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                           
                                <label class="my-2 fs-5 fw-bolder" for="">KODE</label><br>
                                    <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode">
                                                       
                                <label class="my-2 fs-5 fw-bolder" for="">NAMA FAKULTAS</label><br> 
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">

                                <label class="my-2 fs-5 fw-bolder" for="">Nama Dekan</label><br> 
                                <select name="iddosen" class="form-select" required>
                                    <option value="" selected disabled>Pilih Dosen</option>
                                    @foreach($dosen as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                    @endforeach
                                </select><br>
                                <button class="btn btn-danger" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


