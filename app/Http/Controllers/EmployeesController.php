<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\GuzzleHttp;

class EmployeesController extends Controller
{
    public function index() {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://codepen.io/cardinalfinancial/pen/XQKXby.js');

        $body = $response->getBody();

        return view('pages.employees');
    }

    public function profile($id) {
        return view('pages.employee_profile')->with('id', $id);
    }
}
