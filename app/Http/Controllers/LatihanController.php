<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
   public function index()
   {
      return "oke ini latihan controller";    
   }

public function beranda()
   {
      $data = array('nama' => 'kaizen');
      return view('beranda', $data);
   }
}    

