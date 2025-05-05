<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // public function index(){
    //     $mahasiswa=mahasiswa::find(2);
    //     $mahasiswasData = mahasiswa::orderby('id','asc')->latest()->get();
    //     return view('backend.pendaftaranPKl',['mahasiswas'=>$mahasiswasData]);
    // }
    public function index(){
        $mahasiswa = mahasiswa::find(1); 
        $mahasiswasData = mahasiswa::orderby('id','asc')->latest()->get();
        
       
        return view('backend.pendaftaranPKl', [
            'mahasiswas' => $mahasiswasData,
            'mahasiswa' => $mahasiswa 
        ]);
    }

    public function create(){
        $mahasiswa = mahasiswa::find(1); 
        return view('mahasiswa.createPendaftaranPKL',['mahasiswa'=>$mahasiswa]);
    }

    public function getData() {
        $mahasiswa=mahasiswa::find(1);
        return view('layouts.dashboardBE', ['mahasiswa' => $mahasiswa]);
    }
    
}
