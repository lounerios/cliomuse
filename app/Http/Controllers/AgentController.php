<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Agent;

class AgentController extends Controller
{
    function login(Request $request){
        Log::info("Try to login");

        $validate = $request->validate([
            'username'=>'required'
        ]);

        $username = $request['username'];

        Log::info("Username:".$username);

        if (!Agent::GetAgentByUsername($username)){
            return redirect('/')->withErrors('The username you have provided is invalid.');
        }
       
        return redirect('booking/view')->with('agent', $username);
    }
}
