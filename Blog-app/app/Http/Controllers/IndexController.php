<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        
        $generalposts = [
            ['id' => 1 , 'name' => 'palastininen won inshallah' , 'postedby' => 'adel mahmoud' , 'createdat'=> '00:00:00 2024-08-01' ],
            ['id' => 2 , 'name' => 'egyptions won against bal7a' , 'postedby' => 'ahmed ali ' , 'createdat'=> '00:00:00 2024-04-01' ],
            ['id' => 3 , 'name' => 'yousif mohamed become the Presdient ' , 'postedby' => 'yousif mohamed' , 'createdat'=> '00:00:00 2045-01-01' ],
            ['id' => 4 , 'name' => 'Minister of social health  ' , 'postedby' => 'Mona ' , 'createdat'=> '00:00:00 2028-02-01' ],
        ];
                    //view foldername.Viewname
        return view('Posts.index',['posts' => $generalposts]);
    }
}
