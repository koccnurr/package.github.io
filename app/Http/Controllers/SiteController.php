<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function getIndex(Request $request)
    {
       return view('index');
   }
   public function getBuy(Request $request)
   {
       return view('buy');
   }
}