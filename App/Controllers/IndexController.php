<?php

namespace App\Controllers;
use Needs\Controller\Controller;
use App\Models\Login;

class IndexController extends Controller {
    public function index(){
        if(isset($_SESSION['logged'])){
            $this->title = 'Parking ETEC';
            $this->render('index', 'Painel', 'PainelLayout');
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

    public function logout() {
        unset($_SESSION['logged']);
        if(ini_get('session.use_cookies')){
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 8400,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }
        header('Location: /');
        die();
    }
}
