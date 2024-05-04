<?php

require '../App/Connection.php';

if(isset($_POST['email']) && isset($_POST['senha'])){
    ValidarLogin($_POST['email'], $_POST['senha']);
}

function ValidarLogin($email, $senha){
    $hash = hash('sha256', $senha);
    $sql = "SELECT * FROM tb_funcionario WHERE nm_email=:email and cd_senha=:senha";
    $query = $GLOBALS['conn']->prepare($sql);

    $query->bindParam(':email', $email);
    $query->bindParam(':senha', $hash);

    $query->execute();
    $result = $query->fetchAll()[0];
    if(!empty($result)){
        session_start();
        $_SESSION['logged'] = [
            "id" => $result->cd_funcionario,
            "nome" => $result->nm_funcionario,
        ];
        Confirma('Bem-VIndo');
    } else {
        Erro('Deu RUim');
    }
}

function Confirma($msg){
    print"
        <script>
            alert('$msg');
            location.href='painel/index.php';
        </script>
    ";
}

function Erro($msg){
    print"
        <script>
            alert('$msg');
            history.go(-1);
        </script>
    ";
}