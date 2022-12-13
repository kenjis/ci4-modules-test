<?php

namespace Home\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('Home\Views\welcome_message');
    }
}
