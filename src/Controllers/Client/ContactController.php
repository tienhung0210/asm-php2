<?php

namespace Admin\Test\Controllers\Client;

use Admin\Test\Commons\Controller;

class ContactController extends Controller
{
    public function index()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}
