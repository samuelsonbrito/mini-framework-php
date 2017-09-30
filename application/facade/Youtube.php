<?php

include 'simple_html_dom.php';

/**
 * Description of SimpleHtml
 *
 * @author Samuelson
 */
class Youtube {

    private $canal;
    private $html;

    public function __construct() {
        $this->canal = 'https://www.youtube.com/user/CanalSamuelson/about';
        $this->html = !empty(file_get_html($this->canal)) ? file_get_html($this->canal) : null;
    }

    public function getInscritos() {

        if (!empty($this->html)) {
            return $this->html->find('.about-stats .about-stat b', 0)->plaintext;
        }

        return 0;
    }

    public function getViews() {
        if (!empty($this->html)) {
            return $this->html->find('.about-stats .about-stat b', 1)->plaintext;
        }

        return 0;
    }
    
    public function getInscritoStatus(){
        $inscrito = "https://www.youtube.com/user/CanalPeixeBabel";
        $htmlInscrito = !empty(file_get_html($inscrito)) ? file_get_html($inscrito) : null;
        $status = $htmlInscrito->find('.yt-uix-button-content .subscribed-label', 1)->plaintext;
        return $status;
        //yt-uix-button-content
    }

}
