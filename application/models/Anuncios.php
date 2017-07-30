<?php

/**
 * Description of Anuncios
 *
 * @author Samuelson
 */
class Anuncios extends Model{
    
    public function __construct() {
        $this->table = 'anuncio';
        parent::__construct();
    }
    
    public function getQuantidade() {
        
    }
    
}
