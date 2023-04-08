@extends('layout.template')
       <!-- START FORM -->
       @section('konten')

       <form action='{{ url('pengunjung/'.$data->pengunjung) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">    
            <a href="{{ url('pengunjung') }}" class="btn btn-secondary">kembali</a>
            {{-- <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nim' id="nim">
                </div>
            </div> --}}
            <div class="mb-3 row">
                <label for="pengunjung" class="col-sm-2 col-form-label">Pengunjung</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='pengunjung' value="{{ $data->pengunjung }}" id="pengunjung">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='bulan' value="{{ $data->bulan }}" id="bulan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bulan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>   
    </form>

    <!-- AKHIR FORM -->
       @endsection