<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    private $langActive = [
        'vi',
        'en',
    ];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
        $this->middleware('auth');
    }

    public function changeLang(Request $request, $lang)
    {
        if (in_array($lang, $this->langActive)) {
            $request->session()->put('lang', $lang);
            return redirect()->back();
        }
    }
}
