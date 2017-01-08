<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form;
use Auth;
use Session;


class FormController extends Controller
{
    public function create()
    {
    	return view('form.create');
    }
    public function store(Request $request)
    {
    	$pemesan = $request->pemesan;
    	$pengantin = $request->pengantin;
    	$alamat = $request->alamat;
    	$telepon = $request->telepon;
    	$tempat = $request->tempat;
    	$tanggal_sewa = $request->tanggal_sewa;
    	$jenis_kegiatan = $request->jenis_kegiatan;
    	$waktu_kegiatan = $request->waktu_kegiatan;

    	$form = new Form;
    	$form->pemesan = $pemesan;
    	$form->pengantin = $pengantin;
    	$form->alamat = $alamat;
    	$form->telepon = $telepon;
    	$form->tempat = $tempat;
    	$form->tanggal_sewa = $tanggal_sewa;
    	$form->jenis_kegiatan = $jenis_kegiatan;
    	$form->waktu_kegiatan = $waktu_kegiatan;
    	$form->save();
		
		Session::flash("flash_notification",[
		"level"=>"success",
		"message"=>"Berhasil Menyimpan"
    	]);
		
		return redirect()->route('form.create');
    }
	public function index()
	{
		$form = Form::all();
		return view('form.index',compact('form'));
	}
	public function show($id)
	{
		$form = Form::find($id);
		return view('form.show',compact('form'));
	}
	public function edit($id)
	{
		$form = Form::find($id);
		return view('form.edit',compact('form'));
	}
    public function update(Request $request, $id)
    {
        $pemesan = $request->pemesan;
        $id = $request->id;

        $form = Form::find($id);
        $form->pemesan = $pemesan;
        $form->pengantin = $pengantin;
        $form->alamat = $alamat;
        $form->telepon = $telepon;
        $form->tempat = $tempat;
        $form->tanggal_sewa = $tanggal_sewa;
        $form->jenis_kegiatan = $jenis_kegiatan;
        $form->waktu_kegiatan = $waktu_kegiatan;
        if ($form->save()) {
            Session::flash('flash_notification', [
                "level"=>"success",
                "message"=>" Berhasil Mengubah"
        ]);

        }else{
            Session::flash('flash_notification', [
                "level"=>"danger",
                "message"=>"Gagal Mengubah"
        ]);

        }
        return redirect()->route('category.index');        
    }
    public function destroy($id)
    {
        $form = Form::find($id);
        if ($form->delete()) {
            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil Menghapus"
        ]);
        }else{
            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Gagal Menghapus"
        ]);
        }
        return redirect()->route('form.index');
    }
}
