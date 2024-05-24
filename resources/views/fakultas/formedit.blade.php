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
                        <a href="{{url('fakultas/')}}" class="btn btn-md btn-light mb-3 ">KEMBALI</a>
                         </div>
                    </div>
                    <form action="{{url('fakultas/'.$fakultas->id)}}" method="post" class="">
                        @csrf
                        {{method_field('PUT')}}
                    
                        <label class="my-2 fs-5 fw-bolder" for="">Kode</label><br>
                            <input type="text" name="kode" class="form-control" value="{{$fakultas->kode }}" placeholder="Masukkan Kode">
                                          
                        <label class="my-2 fs-5 fw-bolder" for="">Nama Fakultas</label><br> 
                            <input type="" name="nama" class="form-control" value="{{$fakultas->nama }}" placeholder="Masukkan Nama"> <br>

                            <label for="idta" class="form-label">Dekan</label>
                            <select class="form-select" id="idta" name="iddosen" required>
                                @foreach ($dosen as $d)
                                    <option value="{{ $d->id }}" {{ $fakultas->iddosen == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                                @endforeach
                            </select> <br>
                        
                        <button class="btn btn-danger" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
