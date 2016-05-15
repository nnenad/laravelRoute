<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxRequest extends Controller
{

    function getLicences(){
        return view('licence');
    }

    function getLicencesList(){
        return response()->json(['name' => 'Abigail', 'state' => 'CA', 'licencaBr' => 1234]);
    }

    function getData1(){
        return response()->json(['name' => 'Nenad', 'prezime' => 'nisavic', 'idlicenca' => '123433']);
    }

    function getData2(){
        return response()->json(['name' => 'Koja']);
    }

    function getData3(){
        return response()->json(['name' => 'voja']);
    }

    function obradiPodatke(){

    }
}
