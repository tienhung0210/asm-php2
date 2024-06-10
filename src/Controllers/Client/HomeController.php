<?php

namespace Admin\Test\Controllers\Client;

use Admin\Test\Commons\Controller;
use Admin\Test\Models\Sanphamshop;

class HomeController extends Controller
{
    private Sanphamshop $sanphamshop;

    public function __construct()
    {
        $this->sanphamshop = new Sanphamshop();
    }
    public function index()
    {
        $sanphams = $this->sanphamshop->all();

        $this->renderViewClient('home', [
            'sanphams' => $sanphams
        ]);
    }
}
