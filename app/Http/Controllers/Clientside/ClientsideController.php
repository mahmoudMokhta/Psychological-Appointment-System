<?php

namespace App\Http\Controllers\Clientside;

use App\Http\Controllers\Controller;

class ClientsideController extends Controller
{
    public function index()
    {
        return view('clientside.index');


    }
    public function doctors()
    {
        return view('clientside.pages.doctors');

    }
    public function booking()
    {
        return view('clientside.pages.doctor_booking');

    }
    public function contact()
    {
        return view('clientside.pages.contact');

    }
    public function about()
    {
        return view('clientside.pages.about');

    }
}
