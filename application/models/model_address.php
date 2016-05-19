<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_address extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function getListProvince()
	{
		$sql = "SELECT `province`.`PROVINCEID`, `province`.`PROVINCENAME` FROM `province` ORDER BY `province`.`PROVINCEID`";
		$query = $this->db->query($sql);
		if ($query->num_rows() >0)
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}

	function getListDistrict()
	{
		$sql = "SELECT * FROM `district` ORDER BY `DISTRICTID`";
		$query = $this->db->query($sql);
		if($query->num_rows() >0 )
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}
	
	function getListDistrictByID($provinceID)
	{
		$sql = "SELECT * FROM `district` where `district`.`PROVINCEID` = '$provinceID' ";
		$query = $this->db->query($sql);
		if($query->num_rows() >0 )
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}
	}
} 
?>