<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentsController extends Controller{
    
    public function index(){
        return view('comments');
    }
}
