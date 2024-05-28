<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
{
    $dccomics = Config::get('db_comics.dccomics');
    $navbarFooter = Config::get('db_comics.navbarFooter');
    $navigation = Config::get('db_comics.navigation');

    $comics = Comic::all();

    return view('home', compact('dccomics', 'navbarFooter', 'navigation', 'comics'));
}


}
