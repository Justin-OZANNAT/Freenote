<?php

class Account extends AbstractController
{

    public function index()
    {
        $this->loadModel('ModelAccount');
        $this->render('index');
    }

    public function login()
    {
        App::getAuth()->login($_POST['email'], $_POST['password']);
    }

    public function register()
    {
        App::getAuth()->register($_POST);
    }


}