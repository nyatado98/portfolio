<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Download extends Controller
{
    //
    public function download(){
        $filename = 'Dan Nyatado Ndong.docx';
        $doc = storage_path('document\Dan Nyatado Ndong.docx');
        return response()->download($doc);
    //    return  Storage::download('app/document/' .$filename);
    }
}
