<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  public function home(){
 return view('pages.index');
  }

  public function about(){
      $nama = "Laravel";
    return view('pages.about', ['nama' => $nama]);
}


public function welcome(){
return view('pages.welcome');
}

}
