<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
class RecoverController extends Controller
{
    public function index(){
        return view('recover');
    }

    public function oneday(){
        $date= date_timestamp_get(date_create());
        $Day1 = $date - 86400;
        $Day2 = $date - 172800;
        $words = Word::whereBetween('created_at',array($Day2,$Day1))->get();        
        return response()->json($words,200);
    }
    public function oneweek(){
        $date= date_timestamp_get(date_create());        
        $Day7 = $date - 604800;
        $Day8 = $date - 691200;
        $words = Word::whereBetween('created_at',array($Day8,$Day7))->get();         
        return response()->json($words,200);
    }
    public function onemonth(){
        $date= date_timestamp_get(date_create());
        $Day30 = $date - 2592000;
        $Day31 = $date - 2678400;
        $words = Word::whereBetween('created_at',array($Day31,$Day30))->get();       
        return response()->json($words,200);
    }
}
