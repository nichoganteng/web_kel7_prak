<?php

namespace App\Controllers;

class FormController extends BaseController {
    public function profile() {
        return view('profile');
    }
    public function about() {
        return view('about');
    }
}
