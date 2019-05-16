<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Agent;

class AgentController extends Controller
{
    protected $usernames = array('CM-GEORGE','CM-JOHN','CM-MARIA');

    function login(Request $request){
        Log::info("Try to login");

        $validate = $request->validate([
            'username'=>'required'
        ]);

        $username = $request['username'];

        Log::info("Username:".$username);

        if (!in_array(strtoupper($username), $this->usernames)){
            return redirect('/')->with('error', 'The username you have provided is invalid');
        }
       
        return redirect('booking/view')->with('agent', $username);
    }
}
