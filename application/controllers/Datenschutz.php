<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Datenschutz extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
		
		foreach($this->meta as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}
        $data['title'] .= '  - Datenschutz';
        $data['main_content'] = 'datenschutz/datenschutz_content';
        $this->load->view('template', $data);
    }

}