<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
    }


    function index()
    {
        $this->view->render('login/index');
    }

    
    function run()
    {
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            if (!empty($_POST["login"]) && !empty($_POST["password"])) {
                $userData = $this->model->run($_POST["login"], $_POST["password"]);
                
                if (!empty($userData)) {
                    $this->view->render('help/index');
                }
            } else {
                echo "Login error";
            }
        } else {
            echo "Login error";
        }
    }
}
