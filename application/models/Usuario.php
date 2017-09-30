<?php

/**
 * Description of Usuario
 *
 * @author Samuelson
 */
class Usuario extends Model {

    public function __construct() {
        $this->table = 'users';
        parent::__construct();
    }

    public function login($login) {
        $acesso = array_map('strip_tags', array_map('trim', $login));
        $result = $this->select("select * from users where email = :login and pass = :senha and status = 1", "login={$acesso['email']}&senha={$acesso['senha']}");
        if ($result) {
            $sessao['des_login'] = $result[0]['email'];
            $sessao['des_nome'] = $result[0]['name'];
            $sessao['des_id'] = $result[0]['id'];
            $sessao['des_level'] = $result[0]['level'];
            Session::start($sessao);
            return true;
        }
    }

    public function cadastro($formulario) {
        $dados = array_map('strip_tags', array_map('trim', $formulario));

        $usuario['name'] = $dados['nome'];
        $usuario['email'] = $dados['email'];
        $usuario['pass'] = $dados['senha2'];
        $usuario['level'] = 2;

        if ($this->insert($usuario)) {
            return true;
        } else {
            return false;
        }
    }

}
