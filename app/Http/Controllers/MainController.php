<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Org;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MainController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        return view('pages.main', []);
    }

}
