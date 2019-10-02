<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class LangController extends Controller
{
    
    public function setLocale($locale)
    {
        echo $locale;
        // exit;
        $locales = array("en", "kr", "jp", "cn");
        print_r( $locales);
        exit;
        if(in_array($locale, $locales)) {
            App:: setLocale($locale);
        }

    return redirect()->back();
    }
}
