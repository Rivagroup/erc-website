<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Agb extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
		
		foreach($this->meta as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}
        $data['title'] .= ' - Allgemeine Geschäftsbedingungen';
        $data['main_content'] = 'agb/agb_content';
        $this->load->view('template', $data);
    }

}