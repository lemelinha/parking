<?php

namespace App\Controllers;
use Needs\Controller\Controller;
use App\Models\Login;

class IndexController extends Controller {
    public function index(){
        if(isset($_SESSION['logged'])){
            $this->render('index', '');
            die();
        }

        $this->render('login', '');
    }

    public function loginAuth(){
        if (!isset($_POST['email']) || !isset($_POST['senha'])){
            header('Location: /');
            die();
        }

        $LoginModel = new Login();
        if($LoginModel->loginAuth($_POST['email'], $_POST['senha'])){
            $_SESSION['modal'] = ['text' => "Seja bem vindo(a), " . $_SESSION['logged']['nome']];
            header('Location: /');
            die();
        }
        
        $_SESSION['modal'] = ['text' => 'Email ou senha inválidos'];
        header('Location: /');
        die();
    }
}
