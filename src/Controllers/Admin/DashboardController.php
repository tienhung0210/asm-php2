<?php

namespace Admin\Test\Controllers\Admin;

use Admin\Test\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}