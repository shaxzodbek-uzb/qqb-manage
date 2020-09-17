<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke($locale)
    {
        if (in_array($locale, ['en', 'ru', 'uz-Latn'])) {
            session(['locale' => $locale]);
        }
        return back();
    }
}
