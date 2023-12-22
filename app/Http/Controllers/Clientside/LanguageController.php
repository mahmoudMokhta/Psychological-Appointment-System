<?php

namespace App\Http\Controllers\Clientside;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function index($lang)
    {
        if (! in_array($lang, ['en', 'ar'])) {
            abort(400);
        }
        //store the lang in session
        session()->put('locale', $lang);
        //change language
        App::setLocale($lang);
        return redirect()->back();

    }
}
