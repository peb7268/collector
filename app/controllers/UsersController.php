<?php

class UsersController extends BaseController {
    protected $layout = 'layouts.page';

    public function register()
    {
        return View::make('users.register');
    }

    public function login()
    {
        return View::make('users.login');
    }

    public function admin_home()
    {
        return View::make('users.admin');
    }

    public function auth()
    {
        extract(Input::only('email', 'password'));

        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            return Redirect::intended('login');
        }
    }
} 