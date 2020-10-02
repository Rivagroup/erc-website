<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Kindergeburtstag extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" - Kindergeburtstag";
		return($data);
		}
		
    public function index() 
	{
		$data=$this->meta4all($this->meta);
        $data['title'] .= '- Übersicht';
        $data['main_content'] = 'kindergeburtstag/overview';
        $this->load->view('template', $data);
    }

    public function basic() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' - Paket Basic';
        $data['main_content'] = 'kindergeburtstag/basic';
        $this->load->view('template', $data);
    }

    public function maxi() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' - Paket Maxi';
        $data['main_content'] = 'kindergeburtstag/maxi';
        $this->load->view('template', $data);
    }

    public function xxl() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' - Paket XXL';
        $data['main_content'] = 'kindergeburtstag/xxl';
        $this->load->view('template', $data);
    }

}