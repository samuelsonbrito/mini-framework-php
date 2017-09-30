<?php

/**
 * Description of Login
 *
 * @author Samuelson
 */
class LoginController extends Controller {

    public function index() {

//        $get = Request::get('v');
//
//        $dados = array(
//            'mensagem' => !empty($get) ? 
//        );

        if (empty(Session::get('des_login'))) {
            $this->loadTemplate('login');
        }else{
            Redirect::url("usuario/painel");
        }
    }

    public function entrar() {
        $login = Request::post();
        $usuario = new Usuario();
        if ($usuario->login($login)) {
            $retorno = ['status' => TRUE];
            echo json_encode($retorno);
        } else {
            $retorno = ['status' => FALSE];
            echo json_encode($retorno);
        }
    }

    public function sair() {
        Session::destroy();
        Redirect::url('login');
    }

}
