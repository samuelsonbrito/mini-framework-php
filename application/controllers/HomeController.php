<?php

/**
 * Description of homeController
 *
 * @author Samuelson
 */
class HomeController extends Controller{
    
    public function index() {
        $anuncios = new Anuncios();
        $dados = array(
            'quantidade' => $anuncios->getQuantidade()
        );
        
        $this->loadTemplate('home',$dados);
    }
    
    public function testar() {
        
    }
    
}
