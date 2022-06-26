<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class ContactController extends Controller
{

    public function display(){
        return view('contact');
    } 

    public function leaveMessage(Request $request){
        Message::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'subject' => $request -> subject,
            'message' => $request -> message,
        ]);
        return response()->json(true);
    }
}
