<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Buchen extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" - jetzt buchen:";
		return($data);
		}
			
    public function index() 
	{
		$data=$this->meta4all($this->meta);
        redirect(base_url('/escaperooms'));
    }

    public function viruslabor() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' - Viruslabor';
        $data['main_content'] = 'buchen/viruslabor';
        $this->load->view('template', $data);
    }

    public function gefaengnis() {
		$data=$this->meta4all($this->meta);
        $data['title'] = ' - Gefängnis';
        $data['main_content'] = 'buchen/gefaengnis';
        $this->load->view('template', $data);
    }

    public function psychiatrie() {
		$data=$this->meta4all($this->meta);
        $data['title'] = ' - Psychiatrie';
        $data['main_content'] = 'buchen/psychiatrie';
        $this->load->view('template', $data);
    }

    public function jigsaw() {
		$data=$this->meta4all($this->meta);
        $data['title'] = ' - Jigsaw\'s Puzzle';
        $data['main_content'] = 'buchen/jigsaw';
        $this->load->view('template', $data);
    }

}