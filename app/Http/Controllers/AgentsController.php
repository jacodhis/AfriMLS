<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentsController extends Controller
{
      //agents
      public function agents(){
        return view('agents.agents');

    }
    public function agentsProfile(){
        return view('agents.agentsprofile');

    }


}
