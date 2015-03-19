<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sparc extends MY_Controller {

	public function __construct() {
        parent::__construct();
        
    }

	public function index()
	{
        
        
        
    	echo $this->twiggy->display();
	}
}

