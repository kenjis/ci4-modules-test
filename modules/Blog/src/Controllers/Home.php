<?php

namespace Blog\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function getIndex(): string
    {
        return 'Blog module';
    }
}
