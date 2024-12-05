<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
   public function trackingPost(Request $request){
    $request->validate([
        'name' => 'required',
        'present' => '',
        'absent' => '',
        'class' => 'required'

    ]);


   }
}
