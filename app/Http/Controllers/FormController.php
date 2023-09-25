<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(){
        return view('form');
    }

    public function submit(Request $request){
        $request->validate([
            'nama' => 'required|alpha:ascii',
            'email' => 'required|email:rfc',
            'nik' => 'required|integer|digits:16',
            'kelas' => 'required|integer|digits_between:1,2',
            'nilai' => 'required|numeric|between:2.5,99.99',
            'foto' => 'required'
        ]);

        $request->foto->storeAs('public/images', $request->foto->getClientOriginalName());

        $results = [
            'nama' => $request->nama,
            'email' => $request->email,
            'nik' => $request->nik,
            'kelas' => $request->kelas,
            'nilai' => $request->nilai,
            'foto' => $request->foto
        ];

        return redirect('/result')->with(['results'=>$results, 'status' => 'Form Submitted']);
    }

    public function result(){
        return view('hasil');
    }
}
