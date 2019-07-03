<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySecController extends Controller
{
    function getGallery() {
      return view('ver3.gallery');
    }
}
