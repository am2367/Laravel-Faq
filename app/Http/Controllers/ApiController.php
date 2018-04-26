<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    public function returnQuestions() {
        return redirect()->away('https://api.stackexchange.com//2.2/questions?order=desc&sort=activity&site=stackoverflow');
    }
}
