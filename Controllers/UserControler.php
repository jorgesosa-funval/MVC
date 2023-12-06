<?php

require_once '../Models/User.php';


class UserController
{
    function create()
    {
        $user = new User();

        $user->create('Jorge Sosa', 'joregesosa@gmail.com', 1);
    }
}
