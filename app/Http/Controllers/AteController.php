<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AteController extends Controller
{
    Route::get('/list', 'AteController@ateList');  
		public function messageList(){
       $ate = DB::table('listed')->get();
       return view('listed', ['ate' => $ate]);
   }
}
