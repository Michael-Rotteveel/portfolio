<?php

namespace App\Http\Controllers;

use App\content;
use App\Page;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index() {
        return view('public.pages.index');

    }

    public function show($slug) {
        $page = Page::where('slug', $slug)->first();

        return view('public.pages.show', ['page' => $page]);
    }
}
