<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stad;

class StadController extends Controller
{
  public function show($taal, $stad){
    $stad = Stad::where([['stad', '=', $stad],['taal', '=', $taal]])->get();
    return response()->json(
            $stad
    );
  }
}
