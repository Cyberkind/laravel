@extends('home')

@section('isi')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">ID Pengaduan</label>
    <input type="number">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">NIK</label>
    <input type="number">
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
    <input type="date">
  </div>
  <div class="row mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
    <div class="col-3">
    <textarea class="form-control col-1" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit">
  </div>
@endsection