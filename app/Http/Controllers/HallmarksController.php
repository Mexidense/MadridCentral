<?php

namespace App\Http\Controllers;

use App\Hallmark;
use Illuminate\Http\Request;

class HallmarksController extends Controller
{
    public function getTag($id){
        $hallmark = Hallmark::findOrFail($id);

        return view('hallmark.single')->with([
           'hallmark' => $hallmark,
        ]);
    }
}
