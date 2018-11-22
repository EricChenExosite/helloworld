<?php

namespace Oomusou\HelloWorld;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class HelloWorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'Hello World';
        return view('HelloWorld::welcome', compact('message'));
    }
}
