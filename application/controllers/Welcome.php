<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function index()
	{
	
		
		//Assets
		$this->layouts->add_include('assets/css/welcome.css', TRUE);
		$this->layouts->add_include('assets/js/main.js', TRUE);
		//Components
		$arr_components = ['mainMenu' => $this->load->view('Component/mainMenu', null, TRUE)];
		//Templates
		$this->layouts->view('welcome_message', ['components' => $arr_components, 'message'=>'This is home message']);
	
	}
	
}
