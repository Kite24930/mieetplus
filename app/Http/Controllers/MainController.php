<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function recruit() {
        return view('recruit.recruit');
    }

    public function companyDetail($id) {
        $data = [];
        return view('recruit.detail', $data);
    }
}
