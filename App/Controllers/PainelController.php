<?php

namespace App\Controllers;
use Needs\Controller\Controller;

class PainelController extends Controller {
    public function __construct() {
        if (!isset($_SESSION['logged'])) {
            header('Location: /');
            die();
        }
    }

    public function AbrirTicket() {
        $this->title = 'Abrir Ticket';
        $this->render('abrirTicket', 'Painel');
    }
}
