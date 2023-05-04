<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
    function oppretion ()
    {
        // return DB::select("select * from user");
        // data fatch
        // $data = DB::table('user')->get();
        // return view('list', ['key'=>$data]);

        // Data insert to data base
        // return  DB::table('user')->insert(
        //     ['name' => 'Sam',
        //     'email' => 'sam@gmail.com',
        //     'address' => 'UK'
        //     ]
        // );

        // // update id to data base
        // return  DB::table('user')
        // ->where('id',1)
        // ->update(
        //         ['name' => 'Sami Ullah',
        //         'email' => 'sam@gmail.com',
        //         'address' => 'UK'
        //         ]
        //     );



        //Delete data to data base
        return  DB::table('user')
        ->where('id',1)->delete();

    }
}
