<?php

namespace App\Http\Controllers;

use App\Hallmark;
use Illuminate\Http\Request;

class HallmarksController extends Controller
{
    public function getTag($id){
        try{
            $hallmark = Hallmark::find($id);

            $hallmark->id = $id;
            $hallmark->tagType = $this->tagType($hallmark->tag);

            return view('hallmark.single')->with([
                'hallmark' => $hallmark,
            ]);

        }catch (\Exception $e){
            return view('hallmark.query')->with([
                'plate' => $id,
            ]);
        }
    }

    public function show(Request $request){
        try{
            $id = $request->input('plate');
            if($id !== '')
                return $this->getTag($id);

        }catch (\Exception $e){
            return redirect('/');
        }
    }

    public function tagType($tag){
        switch ($tag){
            case '16T0':
                return '0';
                break;
            case '16TE':
                return 'ECO';
                break;
            case '16TC':
                return 'C';
                break;
            case '16TB':
                return 'B';
                break;
            case '16M0':
                return '0';
                break;
            case '16ME':
                return 'ECO';
                break;
            case '16MC':
                return 'C';
                break;
            case '16MB':
                return 'B';
                break;
            default:
                return 'NOT';
                break;
        }
    }
}
