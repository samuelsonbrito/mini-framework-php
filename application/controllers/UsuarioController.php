<?php

/**
 * Description of UsuarioController
 *
 * @author Samuelson
 */
class UsuarioController extends Controller {

    public function index() {
        $this->loadTemplate('login');
    }

    public function cadastro() {
        $this->loadTemplate('cadastro-usuario');
    }

    //Ações
    public function cadastrar() {
        $dados = Request::post();

        if (in_array("", $dados)) {
            $retorno = ['status' => FALSE, 'mensagem' => 'Campos vazios!', 'tipo' => 'warning'];
        } else {

            $usuario = new Usuario();

            $result = $usuario->select("select * from users where email = :login", "login={$dados['email']}");

            if (empty($result)) {

                if ($usuario->cadastro($dados)) {
                    $retorno = ['status' => TRUE, 'mensagem' => 'Cadastrado com sucesso!', 'tipo' => 'success'];
                }else{
                    $retorno = ['status' => FALSE, 'mensagem' => 'Erro ao cadastrar!', 'tipo' => 'danger'];
                }
                
            } else {
                $retorno = ['status' => FALSE, 'mensagem' => 'E-mail já cadastrado!', 'tipo' => 'warning'];
            }
            
        }
        echo json_encode($retorno);
    }

    public function painel() {

        if (!empty(Session::get('des_login'))) {
            $this->loadTemplate('painel');
        } else {
            Redirect::url("login?v=not");
        }
    }

}
