<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthPageController extends Controller{

    private $pages;

    use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('auth');
        $this->pages = Page::where('type_id', 2)->get();
    }

    public function index() {
        return view('auth.page.index', $this->pages);
    }
}
