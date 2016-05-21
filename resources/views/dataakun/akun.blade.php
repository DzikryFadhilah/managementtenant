@extends('app')

@section('content')
<div class="col-sm-12">
  <div class="card-box">
<h4 class="page-title m-t-0 header-title">Buat Akun</h4>
<div class="text-muted m-b-30 font-13"></div>
<div class="row">
  <form method="post" action="{{route('add_data')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
  <label class="col-md-2 control-label">Nama Karyawan</label>
  <div class="col-md-12">
    <div class="col-md-12">
  <input type="text" name="nama_perusahaan" class="form-control" id="name_per" placeHolder="Nama Karyawan">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">Username</label>
<div class="col-md-12">
<div class="col-md-12">
<input type="text" name="nama_dir" class="form-control" id="name_dir" placeHolder="Username">
</div>
</div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Pilih Hak Akses</label><br>
  <div class="col-md-12">
<div class="col-md-12">
  <select class="form-control cold-md-6" name="kontrak" data-style="btn-default btn-custom">
<option>...</option>
<option  value="Super Admin">Super Admin</option>
<option  value="HRD">HRD</option>
<option  value="Accounting">Accounting</option>
<option  value="Teknisi">Teknisi</option>

</select>
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Password</label>
<div class="col-md-12">
<div class="col-md-12">
<input type="password" name="password" class="form-control" id="password" placeHolder="Password">
</div>
</div>
</div>
</div><br>

<div class="form-group">
  <div class="col-md-12">
    <button type="button" class="btn btn-default waves-effect waves-light">
                                                   <span class="btn-label"><i class="fa fa-arrow-left"></i>
                                                   </span><a href="/view_data" style="color:white">Kembali</a></button>
  <button type="submit" class="btn btn-success waves-effect waves-light">
                                                     <span class="btn-label"><i class="fa fa-check"></i>
                                                     </span>Simpan</button>
</div>
</div>
<br>
</form>
@endsection
