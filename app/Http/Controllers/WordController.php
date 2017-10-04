<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WordRequest;
use App\Word;
class WordController extends Controller
{
    public function newWords(){
        $date= date_timestamp_get(date_create());
        $inOneDay = $date - 86400;
        $words = Word::where('created_at','>',$inOneDay)->get();        
        return response()->json($words,200);
    }

    public function store(WordRequest $request){    
        $date = date_create();

        $word = $request->user()->word()->create([
            'words'=>$request->words,
            'link' =>$request->link,
            'created_at' =>date_timestamp_get($date),
        ]);        
        return response()->json($word,200);
        

    }
}

