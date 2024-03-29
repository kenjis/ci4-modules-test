<?php

namespace Home\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('Home\Views\welcome_message');
    }

    public function helper()
    {
        helper('Home\Helpers\test');

        return test();
    }

    public function parser()
    {
        $parser = \Config\Services::parser();

        $data = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'blog_entries' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5'],
            ],
        ];

        return $parser->setData($data)->render('Home\Views\blog_template');
    }

    public function parser_viewpath()
    {
        $parser = \Config\Services::parser(__DIR__ . '/../Views');

        $data = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
            'blog_entries' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5'],
            ],
        ];

        return $parser->setData($data)->render('blog_template');
    }
}
