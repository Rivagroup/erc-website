<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Angebote extends MY_ContentController {

	public function __construct() {
        parent::__construct();
    }

	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" - Angebote";
		return($data);
		}
		
    public function index() 
	{
		$data=$this->meta4all($this->meta);
        $data['main_content'] = 'angebote/angebote_overview';
        $this->load->view('template', $data);
    }

    public function schuelerpakete() {
		$data=$this->meta4all($this->meta);
        $data['title'].= ' - Schülerpakete';
        $data['main_content'] = 'angebote/angebote_schuelerpakete';
        $this->load->view('template', $data);
    }

    public function partyraeume() {
		$data=$this->meta4all($this->meta);
        $data['title'].= ' - Partyräume';
        $data['main_content'] = 'angebote/angebote_partyraeume';
        $this->load->view('template', $data);
    }

}