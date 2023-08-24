<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Download extends Controller
{
    //
    public function download(){
        $filename = 'Dan_Nyatado_CV.doc';
        $doc = storage_path('document/'. $filename);
        return response()->download($doc);
    //    return  Storage::download('app/document/' .$filename);
    }
}
