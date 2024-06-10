<?php

namespace Admin\Test\Controllers\Client;

use Admin\Test\Commons\Controller;

class GioithieuController extends Controller
{
    public function showgioithieu()
    {
        auth_check();

        $this->renderViewClient('gioithieu');
    }
}
