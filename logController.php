<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class logController extends Controller{
    
    public function index(){
        return view('login');
    }
    public function login1(Request $request){
        $login1 = DB::select('SELECT * FROM users WHERE email = ? AND password = ?', [$request->email,$request->password]);
        if($login1){
            return redirect()->route('main');
        }else{
            return redirect()->route('login');
        }
    }
}