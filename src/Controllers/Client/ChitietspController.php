<?php

namespace Admin\Test\Controllers\Client;

use Admin\Test\Commons\Controller;
use Admin\Test\Models\Chitietsp;

class ChitietspController extends Controller
{
    private Chitietsp $chitietsp;

    public function __construct()
    {
        $this->chitietsp = new chitietsp();
    }

    // public function index() {
    //     echo __CLASS__ . '@' . __FUNCTION__;
    // }
    public function show($id)
    {
        $chitietsp = $this->chitietsp->findByID($id);

        $this->renderViewClient('chitietsp', [
            'chitietsp' => $chitietsp
        ]);
    }
}
