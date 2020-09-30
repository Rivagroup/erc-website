<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Impressum extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
		
		foreach($this->meta as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}
        $data['title'] .= ' - Impressum';
        $data['main_content'] = 'impressum/impressum_content';
        $this->load->view('template', $data);
    }

}