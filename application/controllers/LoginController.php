<?php

/**
 * Description of Login
 *
 * @author Samuelson
 */
class LoginController extends Controller{
    
    public function index() {
        $this->loadTemplate('login');
    }
    
}
