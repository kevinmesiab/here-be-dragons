<?php
    
class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
         
        $this->twiggy->title(config_item('site_title'));
        $this->twiggy->meta('viewport', 'width=device-width, initial-scale=1');
        $this->twiggy->meta('content-type', 'text/html; charset=UTF-8');

        
    }

}