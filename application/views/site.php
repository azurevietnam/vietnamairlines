<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	function flight_info(){
		$this->load->view('flight_info');
	}
	
}

?>