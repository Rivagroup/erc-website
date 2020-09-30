<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Veranstaltungen extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }

    public function index() {
		
		foreach($this->meta as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}
        $data['title'] .= ' - Veranstaltungen';
        $data['main_content'] = 'veranstaltungen/veranstaltungen_overview';
        $this->load->view('template', $data);
    }

}