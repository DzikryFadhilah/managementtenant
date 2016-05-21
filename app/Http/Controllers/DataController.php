<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Input;

class DataController extends Controller
{
    public function view_data()
    {
      $s['data'] = \App\datapenyewa::all();
  		return view('datasewa/view')->with($s);
    }
    public function add_data(Request $r)
    {
    $s = new \App\datapenyewa;
    $s->nama_perusahaan = $r->input('nama_perusahaan');
    $s->nama_direktur = $r->input('nama_dir');
    $s->kontrak = $r->input('kontrak');
    $s->jatuh_tempo = $r->input('tempo');
    $s->save();
    return redirect()->route('view_data');
    }

    public function delete_data($id)
    {
      $s = \App\datapenyewa::find($id);
      $s->delete();
      return redirect()->route('view_data');
    }

    public function edit_data($id)
{
  $s['data'] = \App\datapenyewa::find($id);
  return view('datasewa.edit')->with($s);
}

public function view_input()
{
return view('datasewa.add');
}

public function update_data(Request $r)
{
  $s = \App\datapenyewa::find($r->input('id'));
  $s->nama_perusahaan = $r->input('nama_perusahaan');
  $s->nama_direktur = $r->input('nama_dir');
  $s->kontrak = $r->input('kontrak');
  $s->jatuh_tempo = $r->input('tempo');
  $s->save();
  return redirect()->route('view_data');
}
public function input_akun()
{
  return view('dataakun.akun');
}
public function lihat_akun()
{
  return view('dataakun.lihat');
}
}
