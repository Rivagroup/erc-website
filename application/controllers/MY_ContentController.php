<?php

class MY_ContentController extends CI_Controller {
	public $meta;

    public function __construct() {
        parent::__construct();
		$this->meta = array();
		$this->meta['title'] = 'Escape Room Chemnitz | fesselnd';
		$this->meta['main_content'] = 'start/start_content';
		$this->meta['description'] = 'Escaperoom Chemnitz Lasst im Escaperoom Chemnitz den grauen Alltag hinter Euch. Taucht ein in unsere geheimnisvollen Spiele und werdet Teil eines unvergesslichen Erlebnisses!';
		
		$this->meta['keywords_private']= 'escape,exit,room,game';
		
		$this->meta['keywords_alldomains']='chemnitz,freizeit,firmenfeier,kinder,geburtstag,aktivität,junggesellenabschied,veranstaltung, firmen,event,indoor,brunch,billard,dart';
		
		$this->meta['author']="Oliver Oehme";
		$this->meta['co_author']="Mario Franke";
		$this->meta['cache']="no-cache";
		$this->meta['robots']="index,follow,noarchive";
		
		$this->meta['icon_url']=base_url('assets/favicon.png');
		$this->meta['fb_url']='https://www.facebook.com/escroomchemnitz/';
		$this->meta['web_url']='https://escaperoom-chemnitz.de';
		
		$this->meta['kontakt_email']='kontakt@spielcenter-chemnitz.de';
		$this->meta['kontakt_strasse_nr']='Wladimir - Sagorski - Str. 20';
		$this->meta['kontakt_plz']='09122';
		$this->meta['kontakt_ort']='Chemnitz';
		$this->meta['kontakt_region']='Sachsen';
		$this->meta['kontakt_land']='Germany';
		$this->meta['kontakt_telefon']='+49 37123627835';
		$this->meta['kontakt_fax']='+49 37133423349';
		$this->meta['geo_lat']='50.795971244394984';
		$this->meta['geo_long']='12.891801595687866';
		
		
		$this->meta['meta_postal']='<meta name="medium" content="mult" />
							<meta name="language" content="de">
							<meta name="zipcode" content="'.$this->meta['kontakt_plz'].'">
							<meta name="city" content="'.$this->meta['kontakt_ort'].'">
							<meta name="state" content="'.$this->meta['kontakt_region'].'">
							<meta name="country" content="DE">';
		
		$this->meta['meta_og']='<meta property="og:title" content="Escape Room Chemnitz"/>
							<meta property="og:type" content="website"/>
							<meta property="og:site_name" content="Escape Room Chemnitz"/>
							<meta property="og:url" content="'.$this->meta['fb_url'].'"/>
							<meta property="og:image" content="'.$this->meta['icon_url'].'"/>
							<meta property="og:description" content="'.$this->meta['description'].'" />
							<meta property="og:email" content="'.$this->meta['kontakt_email'].'"/> 
							<meta property="og:phone_number" content="'.$this->meta['kontakt_telefon'].'"/> 
							<meta property="og:fax_number" content="'.$this->meta['kontakt_fax'].'"/>
							<meta property="og:latidude" content="'.$this->meta['geo_lat'].'"/>
							<meta property="og:longitude" content="'.$this->meta['geo_long'].'"/>
							<meta property="og:street-adress" content="'.$this->meta['kontakt_strasse_nr'].'"/>
							<meta property="og:locality" content="'.$this->meta['kontakt_ort'].'"/>
							<meta property="og:locale" content="de_DE"/>
							<meta property="og:region" content="'.$this->meta['kontakt_region'].'"/>
							<meta property="og:postal-code" content="'.$this->meta['kontakt_plz'].'"/>
							<meta property="og:country-name" content="'.$this->meta['kontakt_land'].'"/>';

		$this->meta['meta_itemprop']='<span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
							<meta itemprop="streetAddress" content="'.$this->meta['kontakt_strasse_nr'].'">
							<meta itemprop="addressLocality" content="'.$this->meta['kontakt_ort'].'">
							<meta itemprop="addressRegion" content="'.$this->meta['kontakt_region'].'">
							<meta itemprop="postalCode" content="'.$this->meta['kontakt_plz'].'"></span>
							<meta itemprop="url" content="'.$this->meta['web_url'].'">
							<meta itemprop="telephone" content="'.$this->meta['kontakt_telefon'].'">
							<meta itemprop="email" content="'.$this->meta['kontakt_email'].'">
							<meta itemprop="name" content="Escape Room Chemnitz | einfach fesselnd - Exitspiele und Freizeitanlage in Chemnitz / Sachsen"/>
							<meta itemprop="addressCountry" content="de"/>';
									
			$this->meta['meta_links']='<link rel="image_src" href="'.$this->meta['icon_url'].'" />
									<link rel="alternate" type="application/rss+xml" title="Facebook" href="'.$this->meta['fb_url'].'" />';
    }

}