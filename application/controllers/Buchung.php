<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Buchung extends MY_ContentController {

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
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603822527713&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef";
        $data['pageHeadline'] = "<small><i class=\"fas fa-door-open\"></i> Escape Room buchen</small>";
        $data['headImage'] = "";
        $data['headImageAlt'] = "";
        $data['title'] .= ' - Escape Room buchen';
        $data['main_content'] = 'buchung';
        $this->load->view('template', $data);
    }

    public function viruslabor() {
		$data=$this->meta4all($this->meta);
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603822426407&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=28";
		$data['pageHeadline'] = "<small><i class=\"fas fa-door-open\"></i> Viruslabor buchen</small>";
        $data['headImage'] = "assets/header/room_desc_lab_2.webp";
        $data['headImageAlt'] = "Viruslabor";
        $data['maxPlayerCount'] = 8;
        $data['title'] .= ' - Viruslabor';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }

    public function gefaengnis() {
		$data=$this->meta4all($this->meta);
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603822474580&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=27";
		$data['pageHeadline'] = "<small><i class=\"fas fa-door-open\"></i> Gefängnis buchen</small>";
        $data['headImage'] = "assets/header/room_desc_prison.webp";
        $data['headImageAlt'] = "Gefängnis";
        $data['maxPlayerCount'] = 10;
        $data['title'] .= ' - Gefängnis';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }

    public function psychiatrie() {
		$data=$this->meta4all($this->meta);
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603822522904&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=29";
		$data['pageHeadline'] = "<small><i class=\"fas fa-door-open\"></i> Psychiatrie buchen</small>";
        $data['headImage'] = "assets/header/room_desc_psych.webp";
        $data['headImageAlt'] = "Psychiatrie";
        $data['maxPlayerCount'] = 8;
        $data['title'] .= ' - Psychiatrie';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }

    public function jigsaw() {
		$data=$this->meta4all($this->meta);
		$data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603822522904&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=29";
		$data['pageHeadline'] = "<small><i class=\"fas fa-door-open\"></i> Psychiatrie buchen</small>";
        $data['headImage'] = "assets/header/Escape_jigsaw room.jpg";
        $data['headImageAlt'] = "Jigsaw's Puzzle";
        $data['maxPlayerCount'] = 6;
        $data['title'] .= ' - Jigsaw\'s Puzzle';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagBasic() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603828049922&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=5&subcategory=18";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> BASIC <small>buchen</small>";
        $data['headImage'] = "assets/header/room_desc_lab_2.webp";
        $data['headImageAlt'] = "Kindergeburtstag BASIC";
        $data['maxPlayerCount'] = 8;
        $data['title'] .= ' - Kindergeburtstag BASIC buchen';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagMaxi() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603828062486&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=5&subcategory=19";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> MAXI <small>buchen</small>";
        $data['headImage'] = "assets/header/room_desc_lab_2.webp";
        $data['headImageAlt'] = "Kindergeburtstag MAXI";
        $data['maxPlayerCount'] = 8;
        $data['title'] .= ' - Kindergeburtstag MAXI buchen';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagXXL() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1603828082735&grp=d4194bd9-3bdd-43c9-baec-85fd333838ef&category=5&subcategory=20";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> XXL <small>buchen</small>";
        $data['headImage'] = "assets/header/room_desc_lab_2.webp";
        $data['headImageAlt'] = "Kindergeburtstag XXL";
        $data['maxPlayerCount'] = 8;
        $data['title'] .= ' - Kindergeburtstag XXL buchen';
        $data['main_content'] = 'buchung/buchen_content';
        $this->load->view('template', $data);
    }

}