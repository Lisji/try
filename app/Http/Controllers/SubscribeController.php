<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function storeSubscriber(Request $request){
        $subscriber = $request;
        Subscribe::create([
            'email' => $subscriber -> email,
        ]);
        return response()->json(['success'=>'Form is successfully submitted!']);
    }
}
