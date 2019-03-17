<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class kazned extends Controller
{

static function updateBanner($name) {
    $time = date_create()->format('Y-m-d H:i:s');
    $data = array('bannerName'=>$name,'dateShow'=>$time);
    DB::table('kazned')->insert($data);
        return $name;
}

public function getResult(Request $request){

    $data = DB::table('kazned')
        ->select('id','bannerName','dateShow')
        ->whereBetween("dateShow",array($request->dateFrom, $request->dateUntil))
        ->get();


    return view('kazned.test')->with('data',$data);
}

}
