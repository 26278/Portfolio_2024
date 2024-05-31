<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;


class MasterController extends Controller
{
    public static function getLowCompressedString($title)
    {
        return str_replace(' ', '', strtolower($title));
    }

    public function showHome() : View
    {
        $title  = "Home";
        $active = self::getLowCompressedString($title);

        return view('home', ['title' => $title, 'active' => $active]);
    }

    public function showAboutMe()
    {
        $title  = "Over mij";
        $active = self::getLowCompressedString($title);

        return view('about-me', ['title' => $title, 'active' => $active]);
    }

    public function showContact()
    {
        $title  = "Contact";
        $active = self::getLowCompressedString($title);

        return view('contact', ['title' => $title, 'active' => $active]);
    }

    public function showSuperOrange()
    {
        $title  = "Super Orange";
        $active = self::getLowCompressedString($title);

        return view('super-orange', ['title' => $title, 'active' => $active]);
    }
}
