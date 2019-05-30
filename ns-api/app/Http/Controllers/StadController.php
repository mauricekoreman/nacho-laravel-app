<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stad;

class StadController extends Controller
{
  public function show($stad){
    $stad = Stad::where('stad', '=', $stad)->first();

    return response()->json([
      "stad" => $stad,
    ]);
  }
}
