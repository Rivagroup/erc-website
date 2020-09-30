<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Oeffnungszeiten extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
		
		foreach($this->meta as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}
        $data['title'] .= ' - Öffnungszeiten';
        $data['main_content'] = 'oeffnungszeiten/oeffnungszeiten_content';
        $this->load->view('template', $data);
    }

}