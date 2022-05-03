<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
