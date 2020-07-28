<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return view('public.page.index');

    }

    public function show($slug) {
        $page = Page::where('slug', $slug)->first();

        return view('public.page.show', ['page' => $page]);
    }
}
