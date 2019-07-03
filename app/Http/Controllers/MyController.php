<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function getHome() {

      return view('ver3.home');
    }

    function getGallery() {
      return view('ver3.gallery');
    }
}
