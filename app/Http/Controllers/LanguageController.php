<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    private $languageList = [
        'en',
        'vi',
    ];

    public function changeLanguage(Request $request, $lang)
    {
        if (in_array($lang, $this->languageList)) {
            $request->session()->put(['lang' => $lang]);
            
            return redirect()->back();
        }
    }
}
