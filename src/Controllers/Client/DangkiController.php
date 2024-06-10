<?php

namespace Admin\Test\Controllers\Client;

use Admin\Test\Commons\Controller;
use Admin\Test\Models\User;

class DangkiController extends Controller
{
    private User $user;


    public function __construct()
    {
        $this->user = new User();
    }
    public function showdangki()
    {
        auth_check();

        $this->renderViewClient('dangki');
    }

    public function create()
    {
        $users = $this->user->all();

        $userss = array_column($users, 'name', 'id');

        $this->renderViewClient('dangki', [
            ' users' => $userss
        ]);
    }
}
