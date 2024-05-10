<?php

namespace App\Models;
use Needs\Model\Model;

class Login extends Model {
    public function loginAuth($email, $senha){
        $sql = "
            SELECT 
                * 
            FROM 
                tb_funcionario 
            WHERE 
                nm_email=:email
        ";

        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email);
        $query->execute();
        $funcionario = $query->fetchAll()[0];

        if (!empty($funcionario) || password_verify($senha, $funcionario->cd_senha)){
            $_SESSION['logged'] = [
                "id" => $funcionario->cd_funcionario,
                "nome" => $funcionario->nm_funcionario,
                "email" => $funcionario->nm_email
            ];

            return true;
        }

        return false;
    }
}
