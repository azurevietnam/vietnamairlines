<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function lich_bay(){
		$data['menuActive'] = 'lich_bay';
		$this->load->view('flight_info', $data);
	}

	public function truoc_chuyen_bay(){
		$data['menuActive'] = 'truoc_chuyen_bay';
		$this->load->view('before_you_fly', $data);
	}

	public function mua_ve_truc_tuyen(){
		$data['menuActive'] = 'mua_ve_truc_tuyen';
		$this->load->view('book_your_trip', $data);
	}

	public function tren_chuyen_bay(){
		$data['menuActive'] = 'tren_chuyen_bay';
		$this->load->view('the_experience', $data);
	}

	public function khach_hang_thuong_xuyen(){
		$data['menuActive'] = 'khach_hang_thuong_xuyen';
		$this->load->view('frequent_flyer', $data);
	}

	public function khuyen_mai(){
		$data['menuActive'] = 'khuyen_mai';
		$this->load->view('promotions', $data);
	}
}

?>