<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::all();
        return view('web', ['services' => $services]);
    }
}
