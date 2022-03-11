<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentsController extends Controller
{
    public function dashboard(){

        return view('agents.dashboard');

    }

      //agents
      public function agents(){
        return view('agents.agents');

    }
    public function agentsProfile(){
        return view('agents.agentsprofile');

    }


}
