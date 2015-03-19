<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
    }

	public function index()
	{
        $this->twiggy->set('title', config_item('site_title'));
        $this->twiggy->set('tagline', config_item('brief_description'));
        
    	echo $this->twiggy->display();
	}
}

