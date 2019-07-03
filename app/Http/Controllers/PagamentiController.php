<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagamentiController extends Controller
{
    function getPagamenti() {

      $pagamenti = DB::select('

      SELECT *
      FROM pagamenti
      WHERE status = "pending"
      ORDER BY price DESC

      ');

      return view("test.layout", ['pagamneti' => $pagamenti]);
    }
}
