<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index($page = NULL)
    {
        if ($page === NULL || $page === 'login') {
            return view('login');
        } else {
            $view = 'sign' . $page;
            if (view()->exists($view)) {
                return view($view);
            } else {
                abort(404, 'Page not found');
            }
        }
    }

    public function signup()
    {
        return view('sign.signup'); // Return the signup view
    }

    public function homm()
    {
        return view('sign.homm'); // Return the signup view
    }
}

